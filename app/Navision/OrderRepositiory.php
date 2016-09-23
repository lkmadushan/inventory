<?php

namespace App\Navision;

use Illuminate\Database\DatabaseManager;

class OrderRepositiory
{
    protected $db;

    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    public function getAllOrders()
    {
        return $this->db
            ->connection('sqlsrv')
            ->table('ELSTEEL LIMITED - SL$Work Order Details')
            ->get();
    }
}