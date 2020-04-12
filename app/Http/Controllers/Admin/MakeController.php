<?php

namespace App\Http\Controllers\Admin;

use App\Make;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMakeRequest;
use App\Http\Requests\UpdateMakeRequest;

class MakeController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('make_access'), 403);

        $makes = Make::all();

        return view('admin.make.index', compact('makes'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('make_create'), 403);

        $companies = Company::all()->pluck('name', 'id');

        return view('admin.make.create', compact('companies'));
    }

    public function store(StoreMakeRequest $request)
    {
        abort_unless(\Gate::allows('make_create'), 403);

        $make = Make::create($request->all());
        // $make->companies()->sync($request->input('companies', []));

        return redirect("/admin/makes");
    }

    public function edit(Make $make)
    {
        abort_unless(\Gate::allows('make_edit'), 403);

        // $companies = Company::all()->pluck('name', 'id');

        // $make->load('companies');

        return view('admin.make.edit', compact('companies', 'make'));
    }

    public function update(UpdateMakeRequest $request, Make $make)
    {
        abort_unless(\Gate::allows('make_edit'), 403);

        $make->update($request->all());
        // $make->companies()->sync($request->input('companies', []));

        return redirect()->route('admin.make.index');
    }

    public function show(Make $make)
    {
        // abort_unless(\Gate::allows('make_show'), 403);

        // $make->load('companies');

        return view('admin.make.show', compact('make'));
    }

    public function destroy(Make $make)
    {
        abort_unless(\Gate::allows('make_delete'), 403);

        $make->delete();

        return back();
    }
}
