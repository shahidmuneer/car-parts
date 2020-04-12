@extends('layouts.mainTable')

@section('content')

<section class=" bg-gray py-5">
    <div class="container">
        <form action="/request-listings" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Post Your ad start -->
            <fieldset class="border bg-white border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Post Your request</h3>
                            <p>Auto information</p>
                        </div>
                        <div class="col-lg-12">
                            <h6 class="font-weight-bold pt-4 pb-1">Title Of Request:</h6>
                            <input type="text" name="title" class="border w-100 p-2 bg-white text-capitalize" placeholder="Ad title go There"> 
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
                                    <option {{!empty($vehicle) && $vehicle==1?"selected":""}} value="1">Street and dirt Motorcycles</option>
                                    <option {{!empty($vehicle) && $vehicle==2?"selected":""}} value="2">Automotive 1982 or Newer</option>
                                    <option  {{!empty($vehicle) && $vehicle==3?"selected":""}} value="3">Classical and Muscle Cars</option>
                                    <option  {{!empty($vehicle) && $vehicle==4?"selected":""}} value="4">ATV's</option>
                                    <option  {{!empty($vehicle) && $vehicle==5?"selected":""}} value="5">Watercrafts</option>
                                    <option  {{!empty($vehicle) && $vehicle==6?"selected":""}} value="6">Snowbikes</option>
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
                                        <option value="{{$i}}">{{$i}}</option>
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
                                <select id="select-picker-make"  name="make_id"></select>
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
                                <select id="select-picker-model"  name="model_id"></select>
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
                                @if($errors->has('type_id'))
                                            <option selected value="{{old('type_id')}}">{{old('type_id')}}</option>
                                     
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
                                        @if($errors->has('parts_ids') && is_array(old("parts_ids")))
                                        @foreach(old("parts_ids") as $part)
                                            <option selected value="{{$part}}">{{$part}}</option>
                                        @endforeach
                                        @endif
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
                                <input type="radio" name="ad_type" value="personal" id="personal">
                                <label for="personal" class="py-2">Personal</label>

                            </div>
                            <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white ">
                                <input type="radio" name="ad_type" value="business" id="business">
                                <label for="business" class="py-2">Business</label>
                            </div>
                            @if($errors->has('ad_type'))
                                     <p class="help-block">
                                         {{ $errors->first('ad_type') }}
                                     </p>
                                 @endif
                        </div>
                        <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                        <textarea name="description" id="" class="border p-3 w-100" rows="7" placeholder="Write details about your product">{{old("description")}}</textarea>
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
                                    <input type="text" value="{{old("price")}}" name="price" class="form-control py-2 w-100 price" placeholder="Price"
                                        id="price">
                                        
                                </div>
                                <div class="col-lg-4 mrx-4 rounded bg-white my-2 ">
                                    <input type="checkbox"  value="Negotiable" id="Negotiable" name="negotiable">
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
            @if (!Auth::check())
            <!-- seller-information start -->
            <fieldset class="border  bg-white p-4 my-5 seller-information">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Personal Information</h3>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
                        <input type="text" name="name" value="{{old("name")}}" placeholder="Contact name" class="border w-100 p-2">
                        @if($errors->has('name'))
                                     <p class="help-block">
                                         {{ $errors->first('name') }}
                                     </p>
                                 @endif
                        <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
                        <input type="text" name="number" value="{{old("number")}}" placeholder="Contact Number " class="border w-100 p-2">
                        @if($errors->has('number'))
                        <p class="help-block">
                            {{ $errors->first('number') }}
                        </p>
                    @endif
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Email:</h6>
                        <input type="email" name="email" value="{{old("email")}}" placeholder="name@yourmail.com" class="border w-100 p-2">
                        @if($errors->has('email'))
                                     <p class="help-block">
                                         {{ $errors->first('email') }}
                                     </p>
                                 @endif
                        <h6 class="font-weight-bold pt-4 pb-1">Address:</h6>
                        <input type="text" name="address" value="{{old("address")}}" placeholder="Your address" class="border w-100 p-2">
                        @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Zip Code:</h6>
                        <input type="number" name="zip_code" value="{{old("zip_code")}}" placeholder="Zip Code" class="border w-100 p-2">
                        @if($errors->has('zip_code'))
                        <p class="help-block">
                            {{ $errors->first('zip_code') }}
                        </p>
                    @endif
                    </div>
                    <div class="col-lg-6">
                    
                    <h6 class="font-weight-bold pt-4 pb-1">Password:</h6>
                    <input type="password" name="passsword" placeholder="Password" class="border w-100 p-2">
                    @if($errors->has('password'))
                    <p class="help-block">
                        {{ $errors->first('password') }}
                    </p>
                @endif  
                </div>
                </div>
            </fieldset>
            @endif
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
                <input name="terms_and_conditions" type="checkbox" id="terms-&-condition" class="mt-1">
                <label for="terms-&-condition" class="ml-2">By click you must agree with our
                    <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting Rules.</a></span>
                </label>
               
            </div>
            @if($errors->has('terms_and_conditions'))
            <p class="help-block primary">
                {{ $errors->first('terms_and_conditions') }}
            </p>
            @endif
            <button type="submit" class="btn btn-primary d-block mt-2">Post Your Ad</button>
        </form>
    </div>
</section>

@stop