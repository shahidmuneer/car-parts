<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryApiController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }
    public function fetch(Request $request)
    {
        $query=$request->input("q");
        $categories = Category::select("id","name as title")->where("name","like","%$query%")->get();
        return response()->json(["results"=>$categories,"more"=>false]);
    }

    public function store(StoreCategoryRequest $request)
    {
        return Category::create($request->all());
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        return $category->update($request->all());
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function destroy(Category $category)
    {
        return $category->delete();
    }
}
