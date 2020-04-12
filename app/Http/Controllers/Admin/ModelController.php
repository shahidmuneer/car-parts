<?php

namespace App\Http\Controllers\Admin;

use App\Models;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreModelRequest;
use App\Http\Requests\UpdateModelRequest;

class ModelController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('model_access'), 403);

        $models = Models::all();

        return view('admin.model.index', compact('models'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('model_create'), 403);

        $companies = Company::all()->pluck('name', 'id');

        return view('admin.model.create', compact('companies'));
    }

    public function store(StoreModelRequest $request)
    {
        abort_unless(\Gate::allows('model_create'), 403);

        $model = Models::create($request->all());
        // $model->companies()->sync($request->input('companies', []));

        return redirect("/admin/models");
    }

    public function edit(Models $model)
    {
        abort_unless(\Gate::allows('model_edit'), 403);

        // $companies = Company::all()->pluck('name', 'id');

        // $model->load('companies');

        return view('admin.model.edit', compact('companies', 'model'));
    }

    public function update(UpdateModelRequest $request, Models $model)
    {
        abort_unless(\Gate::allows('model_edit'), 403);

        $model->update($request->all());
        // $model->companies()->sync($request->input('companies', []));

        return redirect()->route('admin.models.index');
    }

    public function show(Models $model)
    {
        // abort_unless(\Gate::allows('model_show'), 403);

        // $model->load('companies');

        return view('admin.model.show', compact('model'));
    }

    public function destroy(Models $model)
    {
        abort_unless(\Gate::allows('model_delete'), 403);

        $model->delete();

        return back();
    }
}
