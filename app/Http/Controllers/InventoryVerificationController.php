<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use App\InventoryVerification;
use App\Http\Requests\InventoryRequest;

class InventoryVerificationController extends Controller
{
    public function index()
    {
        $verifications = InventoryVerification::with('item', 'location', 'colour')->today()->get();

        return response()->json($verifications->toArray());
    }

    public function store(InventoryRequest $request)
    {
        Inventory::verifyStock($this->normalizeData($request));

        return response(['status' => 'success'], 201);
    }

    private function normalizeData(Request $request)
    {
        $payload = explode('\\', $request->get('barcode'));

        $columns = ['item_no', 'location', 'rack_no', 'shelf_no'];

        if (count($payload) == 5) array_push($columns, 'colour_id');

        return collect($columns)
            ->combine($payload)
            ->put('physical_stock', $request->get('quantity'))
            ->put('barcode', $request->get('barcode'))
            ->all();
    }
}
