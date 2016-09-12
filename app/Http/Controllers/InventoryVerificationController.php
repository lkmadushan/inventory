<?php

namespace App\Http\Controllers;

use App\Barcode;
use App\Inventory;
use App\VerificationFilters;
use Illuminate\Http\Request;
use App\InventoryVerification;
use App\Http\Requests\InventoryRequest;

class InventoryVerificationController extends Controller
{
    public function index(VerificationFilters $filters)
    {
        $verifications = InventoryVerification::with('item', 'location', 'colour')
            ->filter($filters)
            ->latest()
            ->paginate();

        return response()->json($verifications->toArray());
    }

    public function store(InventoryRequest $request)
    {
        Inventory::verifyStock($this->normalizeData($request));

        return response(['status' => 'success'], 201);
    }

    public function exists()
    {
        $status = InventoryVerification::where('barcode', request('barcode'))->exists();

        return response()->json(['status' => $status]);
    }

    private function normalizeData(Request $request)
    {
        $barcode = new Barcode($request->get('barcode'));

        $data = [];
        $data['item_no'] = $barcode->getItemCode();
        $data['location'] = $barcode->getLocationCode();
        $data['rack_no'] = $barcode->getRackCode();
        $data['shelf_no'] = $barcode->getShelfCode();
        $data['colour_id'] = $barcode->getColorCode();
        $data['physical_stock'] = $request->get('quantity');

        if ($barcode->hasNewItemCode()) {
            $item = Inventory::where('bc_no', $barcode->getItemCode())->first();
            $data['item_no'] = $item->item_no;
        }

        return $data;
    }
}

