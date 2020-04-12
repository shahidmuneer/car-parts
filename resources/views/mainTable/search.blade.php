@extends('layouts.mainTable')

@section('content')


    <section class="row" style="padding-top:10px; padding-bottom:10px; background:gray;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advance Search -->
                    <div class="advance-search">
                        {{-- {!! Form::open([ 'action' => 'HomePageController@table', 'method' => 'get']) !!}

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                {!! Form::text('search', old('search'), ['class' => 'form-control', 'placeholder' => 'Search company']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('name'))
                                    <p class="help-block">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                {!! Form::select('categories', $search_categories, null , ['placeholder' => 'Category', 'class' => 'form-control form-control-lg']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('categories'))
                                    <p class="help-block">
                                        {{ $errors->first('categories') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group col-md-3">
                                {!! Form::select('city_id', $search_cities, null, ['placeholder' => 'City', 'class' => 'form-control form-control-lg']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('city_id'))
                                    <p class="help-block">
                                        {{ $errors->first('city_id') }}
                                    </p>
                                @endif
                            </div>

                            <div class="form-group col-md-2">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Search Now
                                </button>
                            </div>
                        </div>

                        {!! Form::close() !!} --}}

                        {!! Form::open([ 'action' => 'HomePageController@table', 'method' => 'get']) !!}

                        
                                <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
                                   <select id="select-picker-parts"></select>
                                    <p class="help-block"></p>
                                    @if($errors->has('categories'))
                                        <p class="help-block">
                                            {{ $errors->first('categories') }}
                                        </p>
                                    @endif
                                </div>
                    
                                <div class="form-group col-md-3 col-xs-12 float-left" style="padding:10px;">
                                    <select id="select-picker-make"></select>
                                     <p class="help-block"></p>
                                     @if($errors->has('categories'))
                                         <p class="help-block">
                                             {{ $errors->first('categories') }}
                                         </p>
                                     @endif
                                 </div>
                                 <div class="form-group col-md-3 col-xs-12 float-left" style="padding:10px;">
                                    <select id="select-picker-model"></select>
                                     <p class="help-block"></p>
                                     @if($errors->has('categories'))
                                         <p class="help-block">
                                             {{ $errors->first('categories') }}
                                         </p>
                                     @endif
                                 </div>
                                 
                                 <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
                                    <select id="select-picker-type"></select>
                                     <p class="help-block"></p>
                                     @if($errors->has('categories'))
                                         <p class="help-block">
                                             {{ $errors->first('categories') }}
                                         </p>
                                     @endif
                                 </div>
                                
                                <div class="form-group float-left">
                                    <button type="submit"
                                            class="btn btn-sm btn-info">
                                            Search Now
                                    </button>
                                </div>
                            </div>
                    
                        {!! Form::close() !!}
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row" style="padding-top:10px; padding-bottom:20px;">
        <div class="container">
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="search-result bg-gray">
                        <h2>Results</h2>
                        <p>{{ $ads->count() }} Results</p>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                {{-- <div class="col-md-3">
                    <div class="category-sidebar">
                        <div class="widget category-list">
                            <h4 class="widget-header">All Category</h4>
                            <ul class="category-list">
                                @foreach ( $categories_all as $category_all)
                                    <li><a href="{{ route('category', [$category_all->id]) }} ">{{ $category_all->name}}
                                            <span>{{$category_all->companies->count()}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <div class="product-grid-list">
                        <div class="row mt-30">
                            @if (count($ads) > 0)
                                @foreach ($ads as $ad)
                                    <div class="col-sm-12 col-lg-3 col-md-6">

                                        <!-- product card -->

                                        <div class="product-item bg-light">
                                            <div class="card">
                                                <div class="thumb-content">
                                                    @if(!empty($ad->media[0]))
                                                            <img class="card-img-top img-fluid"
                                                          style="width: 100px;
                                                          float: right;
                                                          margin-bottom: -100px;" src="{{ !empty($ad->media[0])?$ad->media[0]->link:"" }}">
                                                      
                                                    @endif
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                        <a href="{{ route('company', [$ad->id]) }}">{{$ad->title}}</a>
                                                    </h4>
                                                    <p><strong>Make: </strong>{{$ad->make->name??""}} <br>
                                                    <strong>Model:</strong> {{$ad->model->name??""}}
                                                    <br><strong>Type: </strong>{{$ad->type->name??""}}
                                                <br>
                                                     <strong>Parts: </strong>
                                                    @foreach($ad->parts as $part)
                                                    {{$part->part->name??""}}
                                                       , 
                                                    @endforeach
                                                 </p>
                                                    <p class="card-text">{{ substr($ad->description, 0, 100) }}
                                                        ...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    {!!$ads->links()!!}
                    {{-- {{ $companies->appends(Request::all())->links() }} --}}
                </div>
            </div>
        </div>
    </section>


@stop