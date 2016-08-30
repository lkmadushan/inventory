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

    public function show($item)
    {
        if (preg_match('/^B_EL\d+$/', $item)) {
            $item = Inventory::where('bc_no', $item)->first();
        } else {
            $item = Inventory::where('item_no', $item)->first();
        }

        return response()->json($item->toArray());
    }

    public function store()
    {
        return Inventory::create(request()->only(['item_no', 'name','description']));
    }
    
}
