<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;

class TypeApiController extends Controller
{
    public function index()
    {
        $categories = Type::all();
        return $categories;
    }
    public function fetch(Request $request)
    {
        $query=$request->input("q");
        $categories = Type::select("id","name as title")->where("name","like","%$query%")->get();
        return response()->json(["results"=>$categories,"more"=>false]);
    }

    public function store(StoreTypeRequest $request)
    {
        return Type::create($request->all());
    }

    public function update(UpdateTypeRequest $request, Type $type)
    {
        return $type->update($request->all());
    }

    public function show(Type $type)
    {
        return $type;
    }

    public function destroy(Type $type)
    {
        return $type->delete();
    }
}
