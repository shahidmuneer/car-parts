@extends('layouts.mainTable')

@section('content')

<section class=" bg-gray py-5">
    <div class="container">
        <form action="/update/ad/{{$ad->id}}" method="POST" enctype="multipart/form-data">
            {{csrf_field() }}
            <!-- Post Your ad start -->
            <fieldset class="border bg-white border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3><a href="/my-ads" class="btn btn-sm btn-info">< Back Dashbard</a></h3>
                            <h3>Post Your ad</h3>
                            <p>Auto information</p>
                        </div>
                        <div class="col-lg-12">
                            <h6 class="font-weight-bold pt-4 pb-1">Title Of Ad:</h6>
                            <input type="text" name="title" value="{{$ad->title}}" class="border w-100 p-2 bg-white text-capitalize" placeholder="Ad title go There"> 
                            @if($errors->has('title'))
                            <p class="help-block">
                                {{ $errors->first('title') }}
                            </p>
                        @endif
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Select Vehicle:</h6>
                            <div class="form-group" >
                                <select class="form-control" name="vehicle_type">
                                    <option value="">-Select Vehicle-</option>
                                    <option value="1" {{$ad->vehicle_type=="bikes"?"selected":""}}>Street and dirt Motorcycles</option>
                                    <option value="2" {{$ad->vehicle_type=="with_roof"?"selected":""}}>Automotive 1982 or Newer</option>
                                    <option value="3" {{$ad->vehicle_type=="without_roof"?"selected":""}}>Classical and Muscle Cars</option>
                                </select>
                                 <p class="help-block"></p>
                                 @if($errors->has('vehicle_type'))
                                     <p class="help-block">
                                         {{ $errors->first('vehicle_type') }}
                                     </p>
                                 @endif
                             </div>
                    </div>
                        <div class="col-lg-6">
                                <h6 class="font-weight-bold pt-4 pb-1">Select Year:</h6>
                                <div class="form-group" >
                                    <select class="form-control" name="year">
                                        <option value="">Select Year</option>
                                        @for($i=date("Y");$i>=1970;$i--)
                                        <option value="{{$i}}" {{$ad->year==$i?"selected":""}}>{{$i}}</option>
                                        @endfor
                                    </select>
                                     <p class="help-block"></p>
                                     @if($errors->has('year'))
                                         <p class="help-block">
                                             {{ $errors->first('year') }}
                                         </p>
                                     @endif
                                 </div>
                        </div>

                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Select Make:</h6>
                            <div class="form-group" >
                                <select id="select-picker-make"  name="make_id">
                                @if(!empty($ad->make))
                                <option value="{{$ad->make->id}}" selected>{{$ad->make->name}}</option>
                                @endif
                                </select>
                                 <p class="help-block"></p>

                                 @if($errors->has('make_id'))
                                     <p class="help-block">
                                         {{ $errors->first('make_id') }}
                                     </p>
                                 @endif
                             </div>
                        </div>

                           
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Select Model:</h6>
                            <div class="form-group" >
                                <select id="select-picker-model"  name="model_id">
                                    @if(!empty($ad->model))
                                    <option value="{{$ad->model->id}}" selected>{{$ad->model->name}}</option>
                                    @endif
                                </select>
                                 <p class="help-block"></p>
                                 @if($errors->has('model_id'))
                                     <p class="help-block">
                                         {{ $errors->first('model_id') }}
                                     </p>
                                 @endif
                             </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Select Type:</h6>
                        <div class="form-group" >
                            <select id="select-picker-type"  name="type_id">
                                @if(!empty($ad->type))
                                <option value="{{$ad->type->id}}" selected>{{$ad->type->name}}</option>
                                @endif
                            </select>
                             <p class="help-block"></p>
                             @if($errors->has('type_id'))
                                 <p class="help-block">
                                     {{ $errors->first('type_id') }}
                                 </p>
                             @endif
                         </div>
                    </div>

                            <div class="col-lg-6">
                                <h6 class="font-weight-bold pt-4 pb-1" >Select Parts:</h6>
                                <div class="form-group" >
                                    <select id="select-picker-parts" multiple  name="parts_ids[]">
                                        @foreach($ad->parts as $part)
                                        <option value="{{$part->part->id}}" selected>{{$part->part->name}}</option>
                                        @endforeach
                                    </select>
                                     <p class="help-block"></p>
                                     @if($errors->has('parts_ids'))
                                         <p class="help-block">
                                             {{ $errors->first('parts_ids') }}
                                         </p>
                                     @endif
                                 </div>
                            </div>
                            
                        
                            {{-- <div class="col-lg-6">
                                <h6 class="font-weight-bold pt-4 pb-1">Select Additional Type:</h6>
                                <div class="form-group" >
                                    <select class="form-control"></select>
                                     <p class="help-block"></p>
                                     @if($errors->has('categories'))
                                         <p class="help-block">
                                             {{ $errors->first('categories') }}
                                         </p>
                                     @endif
                                 </div>
                        </div> --}}
                          


                       

                    </div>
            </fieldset>
            <!-- Post Your ad end -->
            <fieldset class="border  bg-white p-4 my-5 seller-information">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Ad Information</h3>
                    </div>
                    
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Ad Type:</h6>
                        <div class="row px-3">
                            <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white">
                                <input type="radio" {{$ad->ad_type=="personal"?"checked":""}} name="ad_type" value="personal" id="personal">
                                <label for="personal" class="py-2">Personal</label>
                            </div>
                            <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white ">
                                <input type="radio" {{$ad->ad_type=="business"?"checked":""}} name="ad_type" value="business" id="business">
                                <label for="business" class="py-2">Business</label>
                            </div>
                            @if($errors->has('ad_type'))
                                     <p class="help-block">
                                         {{ $errors->first('ad_type') }}
                                     </p>
                            @endif
                        </div>
                        <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                        <textarea name="description" id="" class="border p-3 w-100" rows="7" placeholder="Write details about your product">{{$ad->description}}</textarea>
                        @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                    </div>

                    <div class="col-lg-6">
                        <div class="price">
                            <h6 class="font-weight-bold pt-4 pb-1">Item Price ($ USD):</h6>
                            <div class="row px-3">
                                <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                    <input type="text" value="{{$ad->price}}" name="price" class="form-control py-2 w-100 price" placeholder="Price"
                                        id="price">
                                        
                                </div>
                                <div class="col-lg-4 mrx-4 rounded bg-white my-2 ">
                                    <input type="checkbox" {{$ad->negotiable==true?"checked":""}} value="Negotiable" id="Negotiable" name="negotiable">
                                    <label for="Negotiable" class="py-2">Negotiable</label>
                                </div>
                            </div>
                        </div>
                        <div class="choose-file text-center my-4 py-4 rounded">
                            <label for="file-upload">
                                {{-- <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                                <span class="d-block">or</span> --}}
                                <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                                <span class="d-block">Maximum upload file size: 500 KB</span>
                                <input type="file" value="{{old("files")}}" multiple class="form-control-file d-none" id="file-upload" name="files[]">
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            
            <!-- seller-information end-->

            {{-- <!-- ad-feature start -->
            <fieldset class="border bg-white p-4 my-5 ad-feature bg-gray">
                <div class="row">
                    <div class="col-lg-12">

                        <h3 class="pb-3">Make Your Ad Featured
                            <span class="float-right"><a class="text-right font-weight-normal text-success" href="#">What
                                    is featured ad ?</a></span>
                        </h3>

                    </div>
                    <div class="col-lg-6 my-3">
                        <span class="mb-3 d-block">Premium Ad Options:</span>
                        <ul>
                            <li>
                                <input type="radio" id="regular-ad" name="adfeature">
                                <label for="regular-ad" class="font-weight-bold text-dark py-1">Regular Ad</label>
                                <span>$00.00</span>
                            </li>
                            <li>
                                <input type="radio" id="Featured-Ads" name="adfeature">
                                <label for="Featured-Ads" class="font-weight-bold text-dark py-1">Top Featured Ads</label>
                                <span>$59.00</span>
                            </li>
                            <li>
                                <input type="radio" id="urgent-Ads" name="adfeature">
                                <label for="urgent-Ads" class="font-weight-bold text-dark py-1">Urgent Ads</label>
                                <span>$79.00</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 my-3">
                        <span class="mb-3 d-block">Please select the preferred payment method:</span>
                        <ul>
                            <li>
                                <input type="radio" id="bank-transfer" name="adfeature">
                                <label for="bank-transfer" class="font-weight-bold text-dark py-1">Direct Bank Transfer</label>
                            </li>
                            <li>
                                <input type="radio" id="Cheque-Payment" name="adfeature">
                                <label for="Cheque-Payment" class="font-weight-bold text-dark py-1">Cheque Payment</label>
                            </li>
                            <li>
                                <input type="radio" id="Credit-Card" name="adfeature">
                                <label for="Credit-Card" class="font-weight-bold text-dark py-1">Credit Card</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </fieldset> --}}
            <!-- ad-feature start -->

            <!-- submit button -->
            <div class="checkbox d-inline-flex">
              
               
            </div>
           
            <button type="submit" class="btn btn-primary d-block mt-2">Update Your Ad</button>
        </form>
    </div>
</section>

@stop