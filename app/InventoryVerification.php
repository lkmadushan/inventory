<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryVerification extends Model
{
    protected $fillable = [
        'item_no', 'system_stock', 'physical_stock'
    ];
}
