<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class InventoryVerification extends Model
{
    protected $fillable = [
        'item_no', 'system_stock', 'physical_stock', 'location', 'shelf_no', 'rack_no', 'verified_by'
    ];

    public function scopeToday($query)
    {
        $date = Carbon::now()->format('Y-m-d');

        return $query->whereRaw("DATE(created_at) = '{$date}'");
    }
}
