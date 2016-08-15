<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $perPage = 15;

    protected $fillable = [
        'item_no', 'name', 'description', 'quantity'
    ];

    public function getRouteKeyName()
    {
        return 'item_no';
    }

    public function physicalStocks()
    {
        return $this->hasMany(InventoryVerification::class, 'item_no', 'item_no');
    }

    public function savePhysicalStock($pysicalStock)
    {
        return $this->physicalStocks()->create([
            'item_no' => $this->item_no,
            'system_stock' => $this->quantity,
            'physical_stock' => $pysicalStock
        ]);
    }
}
