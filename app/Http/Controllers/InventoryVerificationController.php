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
        $verifications = InventoryVerification::today()->get();

        return response()->json($verifications->toArray());
    }

    public function store(InventoryRequest $request)
    {
        Inventory::verifyStock($this->normalizeData($request));

        return response(['status' => 'success'], 201);
    }

    private function normalizeData(Request $request)
    {
        return collect(['item_no', 'location', 'rack_no', 'shelf_no'])
            ->combine(explode('\\', $request->get('barcode')))
            ->put('physical_stock', $request->get('quantity'))
            ->all();
    }
}
