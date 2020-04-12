@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('global.type.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.types.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('global.type.fields.name') }}</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($type) ? $type->name : '') }}">
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.type.fields.name_helper') }}
                            </p>
                        </div>
                        {{-- <div class="form-group {{ $errors->has('icon') ? 'has-error' : '' }}">
                            <label for="icon">{{ trans('global.type.fields.icon') }}</label>
                            <input type="text" id="icon" name="icon" class="form-control" value="{{ old('icon', isset($type) ? $type->icon : '') }}">
                            @if($errors->has('icon'))
                                <p class="help-block">
                                    {{ $errors->first('icon') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.type.fields.icon_helper') }}
                            </p>
                        </div> --}}
                        {{-- <div class="form-group {{ $errors->has('types') ? 'has-error' : '' }}">
                            <label for="type">{{ trans('global.type.fields.type') }}
                                <span class="btn btn-info btn-xs select-all">Select all</span>
                                <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                            <select name="types[]" id="types" class="form-control select2" multiple="multiple">
                                @foreach($types as $id => $type)
                                    <option value="{{ $id }}" {{ (in_array($id, old('types', [])) || isset($type) && $type->types->contains($id)) ? 'selected' : '' }}>
                                        {{ $type }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('types'))
                                <p class="help-block">
                                    {{ $errors->first('types') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.type.fields.type_helper') }}
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