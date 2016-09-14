<?php

namespace App\Http\Controllers;

use App\Navision\OrderRepositiory;
use Carbon\Carbon;

class OrdersController extends Controller
{
    protected $repository;

    public function __construct(OrderRepositiory $repositiory)
    {
        $this->repository = $repositiory;
    }

    public function index()
    {
        return collect($this->repository->getAllOrders())->map(function($item) {
            return [
                'order_no' => $item->{'Document No_'},
                'item_no' => $item->{'Item No_'},
                //'item_name' => $item->{'Item Description'},
                'item_colour' => $item->{'Item Color'},
                'quantity_to_ship' => $item->{'Quantity To Ship'},
                'unit_of_measure' => $item->{'Unit Of Measure'},
                'order_date' => Carbon::parse($item->{'Order Date'})->format('Y-m-d'),
                'shipment_date' => Carbon::parse($item->{'Shipment Date'})->format('Y-m-d')
            ];
        });
    }
}
