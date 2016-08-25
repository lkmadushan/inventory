<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use Filterable;

    protected $perPage = 20;

    protected $fillable = [
        'item_no', 'name', 'description', 'quantity'
    ];

    public static function verifyStock($data)
    {
        $item =  static::byItemNo($data['item_no'])->first();

        $data['system_stock'] = $item->quantity;

        return $item->physicalStocks()->create($data);
    }

    public function getRouteKeyName()
    {
        return 'item_no';
    }

    public function physicalStocks()
    {
        return $this->hasMany(InventoryVerification::class, 'item_no', 'item_no');
    }

    public function scopeByItemNo($query, $itemNo)
    {
        return $query->where('item_no', $itemNo);
    }
}
