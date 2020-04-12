@extends('layouts.admin')
@section('content')
<div class="content">
    @can('model_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.models.create") }}">
                    {{ trans('global.add') }} {{ trans('global.model.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.model.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.model.fields.name') }}
                                    </th>
                                    {{-- <th>
                                        {{ trans('global.model.fields.icon') }}
                                    </th>
                                     --}}
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($models as $key => $model)
                                    <tr>
                                        <td>
                                            {{ $model->name ?? '' }}
                                        </td>
                                        {{-- <td>
                                            {{ $model->icon ?? '' }}
                                        </td> --}}
                                        <td>
                                            @can('model_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.model.show', $model->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('model_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.models.edit', $model->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('model_delete')
                                                <form action="{{ route('admin.models.destroy', $model->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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