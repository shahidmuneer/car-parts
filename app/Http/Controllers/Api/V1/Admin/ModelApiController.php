<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreModelsRequest;
use App\Http\Requests\UpdateModelsRequest; 

class ModelApiController extends Controller
{
    public function index()
    {
        $models = Models::all();
        return $models;
    }
    
    public function fetch(Request $request)
    {
        $query=$request->input("q");
        $models = Models::select("id","name as title")->where("name","like","%$query%")->get();
        return response()->json(["results"=>$models,"more"=>false]);
    }

    public function store(StoreModelsRequest $request)
    {
        return Models::create($request->all());
    }

    public function update(UpdateModelsRequest $request, Models $models)
    {
        return $models->update($request->all());
    }

    public function show(Models $models)
    {
        return $models;
    }

    public function destroy(Models $models)
    {
        return $models->delete();
    }
}
