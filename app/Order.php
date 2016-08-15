<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Order extends Model
{
    protected $connection = 'mongodb';

    public function invoice()
    {
        return $this->embedsOne(Invoice::class);
    }
}
