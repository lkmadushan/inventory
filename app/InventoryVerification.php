<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class InventoryVerification extends Model
{
    protected $fillable = [
        'item_no', 'system_stock', 'physical_stock', 'location', 'shelf_no', 'rack_no', 'verified_by', 'barcode', 'colour_id'
    ];

    public function scopeToday($query)
    {
        $date = Carbon::now()->format('Y-m-d');

        return $query->whereRaw("DATE(created_at) = '{$date}'");
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location', 'location_id');
    }

    public function item()
    {
        return $this->belongsTo(Inventory::class, 'item_no', 'item_no');
    }

    public function colour()
    {
        return $this->belongsTo(Colour::class, 'colour_id', 'colour_id');
    }
}
