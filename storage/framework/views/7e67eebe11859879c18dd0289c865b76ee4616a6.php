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

  </div>


<!--==========================================
=            All Category Section            =
===========================================-->

<section class="section">
	<!-- Container Start -->
	<div class="container">
        
        <div class="col-12">
            <div class="row">
              
                        <!-- Category list -->
                        
                      <div class="col col-12"> 
                          <h2 class="text-center" style="margin-bottom:20px;">Find ANY 
                            <?php echo $data["title"]??""; ?></h2>
                      </div>
                       <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <a href="/ad-listings/<?php echo e($to); ?>">
                             <center>
                                    <p><?php echo $data["descriptionForSale"]??""; ?></p>
                            </center>
                            <div class="card profile-card-1">
                              
                                <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                
                                <img src="<?php echo e($data['image']??''); ?>" style="bottom:42%; width:120px;"
                                alt="profile-image" class="profile"/>
                                <div class="card-content">
                                   
                                    <h2 style="color:white;">PARTS FOR SALE</h3>
                              
                                    
                                </div>
                            </div>
                        </a>
                            
                        </div>
                    
                            
                        <div class="col-md-4">
                            <a href="/request-listings/<?php echo e($to); ?>">
                                <center>
                                    <p><?php echo $data["descriptionForSale"]??""; ?></p>
                            </center>
                            <div class="card profile-card-1">

                                <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                
                                <img src="<?php echo e($data['image']??''); ?>" style="bottom:42%; width:120px;"
                                alt="profile-image" class="profile"/>
                                <div class="card-content">
                                <h2 style="color:white;">WANT TO BUY ADS 
                                    <small>“Sales Leads”</small></h3>
                                
                                </div>
                            </div>
                        </a>
                            
                            
                        </div>
                 

                       
                </div>
            
	</div>
	<!-- Container End -->
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.mainTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php projects\classified ads\Laravel-Classimax-Directory-2019\resources\views/mainTable/navigation.blade.php ENDPATH**/ ?>