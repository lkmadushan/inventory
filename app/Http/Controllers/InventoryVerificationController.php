<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Http\Requests\InventoryRequest;
use App\InventoryVerification;

class InventoryVerificationController extends Controller
{
    public function index()
    {
        $verifications = InventoryVerification::today()->get();

        return response()->json($verifications->toArray());
    }

    public function store(InventoryRequest $request)
    {
        $data = collect(['item_no', 'location', 'rack_no', 'shelf_no'])
            ->combine(explode('\\', $request->get('barcode')))
            ->put('physical_stock', $request->get('quantity'));

        Inventory::verifyStock($data->all());

        return response(['status' => 'success'], 201);
    }
}
