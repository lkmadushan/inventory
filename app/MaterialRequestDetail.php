<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialRequestDetail extends Model
{
    protected $fillable = [
        'item_no', 'quantity'
    ];
    
}
