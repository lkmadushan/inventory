<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MaterialRequest;

class MaterialRequestsController extends Controller
{
    public function store()
    {
        return MeterialRequest::Insert(request()->only(['item_no', 'name','description']));
    }
}
