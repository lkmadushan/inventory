<?php

namespace App\Http\Controllers;
use App\Http\Requests;

class InventoryVerificationController extends Controller
{
    public function store(InventoryRequest $request)
    {
        return Inventory::create($request->only(['item_no', 'name','description']));
    }
}
