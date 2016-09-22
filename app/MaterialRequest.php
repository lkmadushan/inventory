<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialRequest extends Model
{
    protected $fillable = [
        'item_no', 'system_stock', 'physical_stock', 'location', 'shelf_no', 'rack_no', 'verified_by', 'barcode', 'colour_id'
    ];
}
