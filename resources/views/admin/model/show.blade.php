@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.model.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.model.fields.name') }}
                                </th>
                                <td>
                                    {{ $model->name }}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('global.model.fields.icon') }}
                                </th>
                                <td>
                                    {{ $model->icon }}
                                </td>
                            </tr> --}}
                            <tr>
                                <th>
                                    Company
                                </th>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection