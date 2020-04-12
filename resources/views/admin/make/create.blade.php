@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('global.make.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.makes.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('global.make.fields.name') }}</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($make) ? $make->name : '') }}">
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.make.fields.name_helper') }}
                            </p>
                        </div>
                        {{-- <div class="form-group {{ $errors->has('icon') ? 'has-error' : '' }}">
                            <label for="icon">{{ trans('global.make.fields.icon') }}</label>
                            <input type="text" id="icon" name="icon" class="form-control" value="{{ old('icon', isset($make) ? $make->icon : '') }}">
                            @if($errors->has('icon'))
                                <p class="help-block">
                                    {{ $errors->first('icon') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.make.fields.icon_helper') }}
                            </p>
                        </div> --}}
                        {{-- <div class="form-group {{ $errors->has('makes') ? 'has-error' : '' }}">
                            <label for="make">{{ trans('global.make.fields.make') }}
                                <span class="btn btn-info btn-xs select-all">Select all</span>
                                <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                            <select name="makes[]" id="makes" class="form-control select2" multiple="multiple">
                                @foreach($makes as $id => $make)
                                    <option value="{{ $id }}" {{ (in_array($id, old('makes', [])) || isset($make) && $make->makes->contains($id)) ? 'selected' : '' }}>
                                        {{ $make }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('makes'))
                                <p class="help-block">
                                    {{ $errors->first('makes') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.make.fields.make_helper') }}
                            </p>
                        </div> --}}
                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection