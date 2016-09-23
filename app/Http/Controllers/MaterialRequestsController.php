<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MaterialRequestDetail;
use App\MaterialRequest;

class MaterialRequestsController extends Controller
{
    public function index()
    {
        $materials = MaterialRequest::with('user','details')->paginate();

        return $materials->toArray();
    }

    public function show($id)
    {

        $materialRequest = MaterialRequest::with('details')->find($id);

        return response()->json($materialRequest->toArray());
    }

    public function store()
    {
        $details = collect(request()->get('items'))->map(function($item) {
            return new MaterialRequestDetail($item);
        });

        $request = new MaterialRequest();
        $request->user_id = auth()->user()->id;
        $request->save();

        $request->details()->saveMany($details);

        return response()->json(['success',  true]);
    }

}
