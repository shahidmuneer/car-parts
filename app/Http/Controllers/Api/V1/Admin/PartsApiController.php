<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Part;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartsRequest;
use App\Http\Requests\UpdatePartsRequest;

class PartsApiController extends Controller
{
    public function index()
    {
        $parts = Part::all();
        return $parts;
    }
    public function fetch(Request $request)
    {
        $query=$request->input("q");
        $parts = Part::select("id","name as title")->where("name","like","%$query%")->get();
        return response()->json(["results"=>$parts,"more"=>false]);
    }

    public function store(StorePartsRequest $request)
    {
        return Part::create($request->all());
    }

    public function update(UpdatePartsRequest $request, Part $part)
    {
        return $part->update($request->all());
    }

    public function show(Part $part)
    {
        return $part;
    }

    public function destroy(Part $part)
    {
        return $part->delete();
    }
}
