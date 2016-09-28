<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialRequestDetail extends Model
{
    protected $fillable = [
        'item_no', 'quantity'
    ];


    public function item(){

        return $this->belongsTo(Inventory::class,'item_no','item_no');
    }
}
