<?php $__env->startSection('content'); ?>

<section class=" bg-gray py-5">
    <div class="container">
        <form action="/ad-listings" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <!-- Post Your ad start -->
            <fieldset class="border bg-white border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Post Your ad</h3>
                            <p>Auto information</p>
                        </div>
                        <div class="col-lg-12">
                            <h6 class="font-weight-bold pt-4 pb-1">Title Of Ad:</h6>
                            <input type="text" name="title" class="border w-100 p-2 bg-white text-capitalize" placeholder="Ad title go There"> 
                            <?php if($errors->has('title')): ?>
                            <p class="help-block">
                                <?php echo e($errors->first('title')); ?>

                            </p>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Select Vehicle:</h6>
                            <div class="form-group" >
                                <select class="form-control" name="vehicle_type">
                                    <option value="">-Select Vehicle-</option>
                                    <option <?php echo e(!empty($vehicle) && $vehicle==1?"selected":""); ?> value="1">Street and dirt Motorcycles</option>
                                    <option <?php echo e(!empty($vehicle) && $vehicle==2?"selected":""); ?> value="2">Automotive 1982 or Newer</option>
                                    <option  <?php echo e(!empty($vehicle) && $vehicle==3?"selected":""); ?> value="3">Classical and Muscle Cars</option>
                                    <option  <?php echo e(!empty($vehicle) && $vehicle==4?"selected":""); ?> value="4">ATV's</option>
                                    <option  <?php echo e(!empty($vehicle) && $vehicle==5?"selected":""); ?> value="5">Watercrafts</option>
                                    <option  <?php echo e(!empty($vehicle) && $vehicle==6?"selected":""); ?> value="6">Snowbikes</option>
                                </select>
                                 <p class="help-block"></p>
                                 <?php if($errors->has('vehicle_type')): ?>
                                     <p class="help-block">
                                         <?php echo e($errors->first('vehicle_type')); ?>

                                     </p>
                                 <?php endif; ?>
                             </div>
                    </div>
                        <div class="col-lg-6">
                                <h6 class="font-weight-bold pt-4 pb-1">Select Year:</h6>
                                <div class="form-group" >
                                    <select class="form-control" name="year">
                                        <option value="">Select Year</option>
                                        <?php for($i=date("Y");$i>=1970;$i--): ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                    </select>
                                     <p class="help-block"></p>
                                     <?php if($errors->has('year')): ?>
                                         <p class="help-block">
                                             <?php echo e($errors->first('year')); ?>

                                         </p>
                                     <?php endif; ?>
                                 </div>
                        </div>

                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Select Make:</h6>
                            <div class="form-group" >
                                <select id="select-picker-make"  name="make_id"></select>
                                 <p class="help-block"></p>
                                 <?php if($errors->has('make_id')): ?>
                                     <p class="help-block">
                                         <?php echo e($errors->first('make_id')); ?>

                                     </p>
                                 <?php endif; ?>
                             </div>
                        </div>

                           
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Select Model:</h6>
                            <div class="form-group" >
                                <select id="select-picker-model"  name="model_id"></select>
                                 <p class="help-block"></p>
                                 <?php if($errors->has('model_id')): ?>
                                     <p class="help-block">
                                         <?php echo e($errors->first('model_id')); ?>

                                     </p>
                                 <?php endif; ?>
                             </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Select Type:</h6>
                        <div class="form-group" >
                            <select id="select-picker-type"  name="type_id">
                                <?php if($errors->has('type_id')): ?>
                                            <option selected value="<?php echo e(old('type_id')); ?>"><?php echo e(old('type_id')); ?></option>
                                     
                                        <?php endif; ?>
                            </select>
                             <p class="help-block"></p>
                             <?php if($errors->has('type_id')): ?>
                                 <p class="help-block">
                                     <?php echo e($errors->first('type_id')); ?>

                                 </p>
                             <?php endif; ?>
                         </div>
                    </div>

                            <div class="col-lg-6">
                                <h6 class="font-weight-bold pt-4 pb-1" >Select Parts:</h6>
                                <div class="form-group" >
                                    <select id="select-picker-parts" multiple  name="parts_ids[]">
                                        <?php if($errors->has('parts_ids') && is_array(old("parts_ids"))): ?>
                                        <?php $__currentLoopData = old("parts_ids"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option selected value="<?php echo e($part); ?>"><?php echo e($part); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                     <p class="help-block"></p>
                                     <?php if($errors->has('parts_ids')): ?>
                                         <p class="help-block">
                                             <?php echo e($errors->first('parts_ids')); ?>

                                         </p>
                                     <?php endif; ?>
                                 </div>
                            </div>
                            
                        
                            
                          


                       

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
                            <?php if($errors->has('ad_type')): ?>
                                     <p class="help-block">
                                         <?php echo e($errors->first('ad_type')); ?>

                                     </p>
                                 <?php endif; ?>
                        </div>
                        <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                        <textarea name="description" id="" class="border p-3 w-100" rows="7" placeholder="Write details about your product"><?php echo e(old("description")); ?></textarea>
                        <?php if($errors->has('description')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('description')); ?>

                        </p>
                    <?php endif; ?>
                    </div>

                    <div class="col-lg-6">
                        <div class="price">
                            <h6 class="font-weight-bold pt-4 pb-1">Item Price ($ USD):</h6>
                            <div class="row px-3">
                                <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                    <input type="text" value="<?php echo e(old("price")); ?>" name="price" class="form-control py-2 w-100 price" placeholder="Price"
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
                                
                                <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                                <span class="d-block">Maximum upload file size: 500 KB</span>
                                <input type="file" value="<?php echo e(old("files")); ?>" multiple class="form-control-file d-none" id="file-upload" name="files[]">
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <?php if(!Auth::check()): ?>
            <!-- seller-information start -->
            <fieldset class="border  bg-white p-4 my-5 seller-information">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Seller Information</h3>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
                        <input type="text" name="name" value="<?php echo e(old("name")); ?>" placeholder="Contact name" class="border w-100 p-2">
                        <?php if($errors->has('name')): ?>
                                     <p class="help-block">
                                         <?php echo e($errors->first('name')); ?>

                                     </p>
                                 <?php endif; ?>
                        <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
                        <input type="text" name="number" value="<?php echo e(old("number")); ?>" placeholder="Contact Number " class="border w-100 p-2">
                        <?php if($errors->has('number')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('number')); ?>

                        </p>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Email:</h6>
                        <input type="email" name="email" value="<?php echo e(old("email")); ?>" placeholder="name@yourmail.com" class="border w-100 p-2">
                        <?php if($errors->has('email')): ?>
                                     <p class="help-block">
                                         <?php echo e($errors->first('email')); ?>

                                     </p>
                                 <?php endif; ?>
                        <h6 class="font-weight-bold pt-4 pb-1">Address:</h6>
                        <input type="text" name="address" value="<?php echo e(old("address")); ?>" placeholder="Your address" class="border w-100 p-2">
                        <?php if($errors->has('address')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('address')); ?>

                        </p>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Zip Code:</h6>
                        <input type="number" name="zip_code" value="<?php echo e(old("zip_code")); ?>" placeholder="Zip Code" class="border w-100 p-2">
                        <?php if($errors->has('zip_code')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('zip_code')); ?>

                        </p>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                    
                    <h6 class="font-weight-bold pt-4 pb-1">Password:</h6>
                    <input type="password" name="passsword" placeholder="Password" class="border w-100 p-2">
                    <?php if($errors->has('password')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('password')); ?>

                    </p>
                <?php endif; ?>  
                </div>
                </div>
            </fieldset>
            <?php endif; ?>
            <!-- seller-information end-->

            
            <!-- ad-feature start -->

            <!-- submit button -->
            <div class="checkbox d-inline-flex">
                <input name="terms_and_conditions" type="checkbox" id="terms-&-condition" class="mt-1">
                <label for="terms-&-condition" class="ml-2">By click you must agree with our
                    <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting Rules.</a></span>
                </label>
               
            </div>
            <?php if($errors->has('terms_and_conditions')): ?>
            <p class="help-block primary">
                <?php echo e($errors->first('terms_and_conditions')); ?>

            </p>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary d-block mt-2">Post Your Ad</button>
        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php projects\classified ads\Laravel-Classimax-Directory-2019\resources\views/mainTable/adList.blade.php ENDPATH**/ ?>