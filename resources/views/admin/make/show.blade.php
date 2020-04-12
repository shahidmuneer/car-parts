@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.make.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.make.fields.name') }}
                                </th>
                                <td>
                                    {{ $make->name }}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>
                                    {{ trans('global.make.fields.icon') }}
                                </th>
                                <td>
                                    {{ $make->icon }}
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