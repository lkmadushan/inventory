<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Invoice extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = ['invoice_no', 'total_amount'];
}
