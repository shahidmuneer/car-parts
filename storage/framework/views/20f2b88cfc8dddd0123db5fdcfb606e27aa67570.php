<?php $__env->startSection('content'); ?>
<style>

@import  url('https://fonts.googleapis.com/css?family=Open+Sans');
@import  url('https://fonts.googleapis.com/css?family=Montserrat');

body {
    font-family: 'Montserrat', sans-serif;

}

/* Category Ads */

#ads {
    margin: 30px 0 30px 0;
   
}

#ads .card-notify-badge {
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px; 
        color: #000;
        padding: 5px 10px;
        font-size: 14px;

    }

#ads .card-notify-year {
        position: absolute;
        right: -10px;
        top: -20px;
        background: #ff4444;
        border-radius: 50%;
        text-align: center;
        color: #fff;      
        font-size: 14px;      
        width: 50px;
        height: 50px;    
        padding: 15px 0 0 0;
}


#ads .card-detail-badge {      
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;        
    }

   

#ads .card:hover {
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

#ads .card-image-overlay {
        font-size: 20px;
        
    }


#ads .card-image-overlay span {
            display: inline-block;              
        }


#ads .ad-btn {
        text-transform: uppercase;
        width: 150px;
        height: 40px;
        border-radius: 80px;
        font-size: 16px;
        line-height: 35px;
        text-align: center;
        border: 3px solid #e6de08;
        display: block;
        text-decoration: none;
        margin: 20px auto 1px auto;
        color: #000;
        overflow: hidden;        
        position: relative;
        background-color: #e6de08;
    }

#ads .ad-btn:hover {
            background-color: #e6de08;
            color: #1e1717;
            border: 2px solid #e6de08;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        }

#ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 18px;
    }

/*Profile Card 1*/
.profile-card-1 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  color: #ffffff;
  text-align: center;
  height:228px;
  border:none;
}
.profile-card-1 .background {
  width:100%;
  vertical-align: top;
  opacity: 0.9;
  -webkit-filter: blur(5px);
  filter: blur(5px);
   -webkit-transform: scale(1.8);
  transform: scale(2.8);
}
.profile-card-1 .card-content {
  width: 100%;
  padding: 15px 25px;
  position: absolute;
  left: 0;
  top: 50%;
}
.profile-card-1 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 179px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.profile-card-1 h2 {
  margin: 0 0 5px;
  font-weight: 600;
  font-size:25px;
}
.profile-card-1 h2 small {
  display: block;
  font-size: 15px;
  margin-top:10px;
}
.profile-card-1 i {
  display: inline-block;
    font-size: 16px;
    color: #ffffff;
    text-align: center;
    border: 1px solid #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-1 .icon-block{
    float:left;
    width:100%;
    margin-top:15px;
}
.profile-card-1 .icon-block a{
    text-decoration:none;
}
.profile-card-1 i:hover {
  background-color:#fff;
  color:#2E3434;
  text-decoration:none;
}
</style>
<!--===============================
=            Hero Area            =
================================-->
    
<div class="col-md-12">
   <center>
  <div class="advance-search card" style="
  padding-top: 40px;
  padding-bottom: 40px;">
    <?php echo Form::open([ 'action' => 'HomePageController@table', 'method' => 'get']); ?>


    <div class="form-group col-md-1 col-xs-1 float-left" style="padding:10px;">
    </div>
            <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
               <select name="parts[]" id="select-picker-parts" multiple></select>
                <p class="help-block"></p>
                <?php if($errors->has('categories')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('categories')); ?>

                    </p>
                <?php endif; ?>
            </div>

            <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
                <select name="make" id="select-picker-make"></select>
                 <p class="help-block"></p>
                 <?php if($errors->has('categories')): ?>
                     <p class="help-block">
                         <?php echo e($errors->first('categories')); ?>

                     </p>
                 <?php endif; ?>
             </div>
             <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
                <select name="model" id="select-picker-model"></select>
                 <p class="help-block"></p>
                 <?php if($errors->has('categories')): ?>
                     <p class="help-block">
                         <?php echo e($errors->first('categories')); ?>

                     </p>
                 <?php endif; ?>
             </div>
             
             <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
                <select id="select-picker-type" name="type"></select>
                 <p class="help-block"></p>
                 <?php if($errors->has('categories')): ?>
                     <p class="help-block">
                         <?php echo e($errors->first('categories')); ?>

                     </p>
                 <?php endif; ?>
             </div>
            
            <div class="form-group col-md-2 float-left">
                <button type="submit"
                        class="btn btn-main">
                        Search Now
                </button>
            </div>
        </div>

    <?php echo Form::close(); ?>


    
</div>
</center> 



<!--==========================================
=            All Category Section            =
===========================================-->

<section class="section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
                    <div class="row">
                      
                                <!-- Category list -->
                                
                              <div class="col col-12">
                                <div class="section-title" style="padding-top:20px;">
                                    <h2>Find ANY Used Part For ANY </h2>
                                    
                                </div>
                            </div>
                                <div class="col-md-4">
                                    <a href="/navigation/automotive/2">
                          
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="https://www.thetruthaboutcars.com/wp-content/uploads/2014/10/1982-vaz-lada-21033-front-34.jpg" 
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;"> Automotive<small>1982 or Newer</small></h3>
                                        
                                        </div>
                                    </div>
                                </a>
                                    
                                </div>
                            
                                    
                                <div class="col-md-4">
                                    <a href="/navigation/automotive/3">
                          
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="https://s25180.pcdn.co/wp-content/uploads/2016/07/iStock_62824630_SMALL.jpg" 
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;"> Classical and Muscle Cars<small></small></h3>
                                        
                                        </div>
                                    </div>
                                </a>
                                    
                                    
                                </div>


                                <div class="col-md-4">
                                    <a href="/navigation/automotive/1">
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="https://autowise.com/wp-content/uploads/2018/03/Street-Legal-Dirt-Bike-KTM.jpg" 
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;"> Street and dirt Motorcycles <small></small></h3>
                                        
                                        </div>
                                    </div>
                                </a>

                                    
                                    
                                </div>


                                <div class="col-md-4" style="margin-top:30px;">
                                    <a href="/navigation/automotive/4">
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="/images/atv.png" 
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;"> ATV's <small></small></h3>
                                        
                                        </div>
                                    </div>
                                </a>

                                    
                                    
                                </div>

                                <div class="col-md-4" style="margin-top:30px;">
                                    <a href="/navigation/automotive/5">
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="/images/watercraft.png" 
                                        style="margin-bottom:-30px;"
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white; margin-top:10px;" >Watercrafts <small></small></h3>
                                        
                                        </div>
                                    </div>
                                </a>

                                    
                                    
                                </div>

                                

                                <div class="col-md-4" style="margin-top:30px;">
                                    <a href="/navigation/automotive/6">
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="/images/snowbikes.png" 
                                       
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;" > Snowbikes <small></small></h3>
                                        
                                        </div>
                                    </div>
                                </a>

                                    
                                    
                                </div>
                        </div>
                    

				<!-- Section title -->
				
                
                    
                        <!-- Category list -->
                        

                        
                    
                    
                
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.mainTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php projects\classified ads\Laravel-Classimax-Directory-2019\resources\views/mainTable/index.blade.php ENDPATH**/ ?>