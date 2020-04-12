@extends('layouts.admin')
@section('content')
<div class="content">
    @can('type_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.types.create") }}">
                    {{ trans('global.add') }} {{ trans('global.type.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.type.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.type.fields.name') }}
                                    </th>
                                    {{-- <th>
                                        {{ trans('global.type.fields.icon') }}
                                    </th>
                                     --}}
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($types as $key => $type)
                                    <tr>
                                        <td>
                                            {{ $type->name ?? '' }}
                                        </td>
                                        {{-- <td>
                                            {{ $type->icon ?? '' }}
                                        </td> --}}
                                        <td>
                                            @can('type_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.types.show', $type->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('type_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.types.edit', $type->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('type_delete')
                                                <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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