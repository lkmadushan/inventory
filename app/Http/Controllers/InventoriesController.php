<?php

namespace App\Http\Controllers;
use App\Inventory;

class InventoriesController extends Controller
{
    public function index()
    {
        $query = request('query');

        $inventories = Inventory::where('name', 'LIKE', "{$query}%")->latest()->paginate();

        return response()->json($inventories->toArray());
    }

    public function show(Inventory $item)
    {
        return response()->json($item->toArray());
    }

    
}
