<?php

namespace App\Http\Controllers\Admin;

use App\Type;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;

class TypeController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('type_access'), 403);

        $types = Type::all();

        return view('admin.type.index', compact('types'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('type_create'), 403);

        $companies = Company::all()->pluck('name', 'id');

        return view('admin.type.create', compact('companies'));
    }

    public function store(StoreTypeRequest $request)
    {
        abort_unless(\Gate::allows('type_create'), 403);

        $type = Type::create($request->all());
        // $type->companies()->sync($request->input('companies', []));

        return redirect("/admin/types");
    }

    public function edit(Type $type)
    {
        abort_unless(\Gate::allows('type_edit'), 403);

        // $companies = Company::all()->pluck('name', 'id');

        // $type->load('companies');

        return view('admin.type.edit', compact('companies', 'type'));
    }

    public function update(UpdateTypeRequest $request, Type $type)
    {
        abort_unless(\Gate::allows('type_edit'), 403);

        $type->update($request->all());
        // $type->companies()->sync($request->input('companies', []));

        return redirect()->route('admin.types.index');
    }

    public function show(Type $type)
    {
        // abort_unless(\Gate::allows('type_show'), 403);

        // $type->load('companies');

        return view('admin.type.show', compact('type'));
    }

    public function destroy(Type $type)
    {
        abort_unless(\Gate::allows('type_delete'), 403);

        $type->delete();

        return back();
    }
}
