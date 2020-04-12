@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('global.model.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.models.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('global.model.fields.name') }}</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($model) ? $model->name : '') }}">
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.model.fields.name_helper') }}
                            </p>
                        </div>
                        {{-- <div class="form-group {{ $errors->has('icon') ? 'has-error' : '' }}">
                            <label for="icon">{{ trans('global.model.fields.icon') }}</label>
                            <input type="text" id="icon" name="icon" class="form-control" value="{{ old('icon', isset($model) ? $model->icon : '') }}">
                            @if($errors->has('icon'))
                                <p class="help-block">
                                    {{ $errors->first('icon') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.model.fields.icon_helper') }}
                            </p>
                        </div> --}}
                        {{-- <div class="form-group {{ $errors->has('models') ? 'has-error' : '' }}">
                            <label for="model">{{ trans('global.model.fields.model') }}
                                <span class="btn btn-info btn-xs select-all">Select all</span>
                                <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                            <select name="models[]" id="models" class="form-control select2" multiple="multiple">
                                @foreach($models as $id => $model)
                                    <option value="{{ $id }}" {{ (in_array($id, old('models', [])) || isset($model) && $model->models->contains($id)) ? 'selected' : '' }}>
                                        {{ $model }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('models'))
                                <p class="help-block">
                                    {{ $errors->first('models') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.model.fields.model_helper') }}
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