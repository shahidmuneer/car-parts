<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Make;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMakeRequest;
use App\Http\Requests\UpdateMakeRequest;

class MakeApiController extends Controller
{
    public function index()
    {
        $makes = Make::all();
        return $makes;
    }
    public function fetch(Request $request)
    {
        $query=$request->input("q");
        $makes = Make::select("id","name as title")->where("name","like","%$query%")->get();
        return response()->json(["results"=>$makes,"more"=>false]);
    }

    public function store(StoreMakeRequest $request)
    {
        return Make::create($request->all());
    }

    public function update(UpdateMakeRequest $request, Make $make)
    {
        return $make->update($request->all());
    }

    public function show(Make $make)
    {
        return $make;
    }

    public function destroy(Make $make)
    {
        return $make->delete();
    }
}
