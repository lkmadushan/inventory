<?php

namespace App\Http\Controllers;
use App\Http\Requests\InventoryRequest;
use App\Inventory;
use App\InventoryFilters;

class InventoriesController extends Controller
{
    public function index(InventoryFilters $filters)
    {
        $inventories = Inventory::filter($filters)->latest()->paginate();

        return response()->json($inventories->toArray());
    }

    public function show(Inventory $item)
    {
        return response()->json($item->toArray());
    }

    public function store(InventoryRequest $request)
    {
        return Inventory::create($request->only(['item_no', 'name','description']));
    }
    
}
