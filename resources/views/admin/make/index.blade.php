@extends('layouts.admin')
@section('content')
<div class="content">
    @can('make_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.makes.create") }}">
                    {{ trans('global.add') }} {{ trans('global.make.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.make.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.make.fields.name') }}
                                    </th>
                                    {{-- <th>
                                        {{ trans('global.make.fields.icon') }}
                                    </th>
                                     --}}
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($makes as $key => $make)
                                    <tr>
                                        <td>
                                            {{ $make->name ?? '' }}
                                        </td>
                                        {{-- <td>
                                            {{ $make->icon ?? '' }}
                                        </td> --}}
                                        <td>
                                            @can('make_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.makes.show', $make->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('make_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.makes.edit', $make->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('make_delete')
                                                <form action="{{ route('admin.makes.destroy', $make->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection