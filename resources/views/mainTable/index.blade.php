@extends('layouts.mainTable')

@section('content')
<style>

@import url('https://fonts.googleapis.com/css?family=Open+Sans');
@import url('https://fonts.googleapis.com/css?family=Montserrat');

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
{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" height="250" src="/images/cover.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="250" src="/images/cover2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="250" src="/images/cover3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    ---}}    
<div class="col-md-12">
   <center>
  <div class="advance-search card" style="
  padding-top: 40px;
  padding-bottom: 40px;">
    {!! Form::open([ 'action' => 'HomePageController@table', 'method' => 'get']) !!}

    <div class="form-group col-md-1 col-xs-1 float-left" style="padding:10px;">
    </div>
            <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
               <select name="parts[]" id="select-picker-parts" multiple></select>
                <p class="help-block"></p>
                @if($errors->has('categories'))
                    <p class="help-block">
                        {{ $errors->first('categories') }}
                    </p>
                @endif
            </div>

            <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
                <select name="make" id="select-picker-make"></select>
                 <p class="help-block"></p>
                 @if($errors->has('categories'))
                     <p class="help-block">
                         {{ $errors->first('categories') }}
                     </p>
                 @endif
             </div>
             <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
                <select name="model" id="select-picker-model"></select>
                 <p class="help-block"></p>
                 @if($errors->has('categories'))
                     <p class="help-block">
                         {{ $errors->first('categories') }}
                     </p>
                 @endif
             </div>
             
             <div class="form-group col-md-2 col-xs-12 float-left" style="padding:10px;">
                <select id="select-picker-type" name="type"></select>
                 <p class="help-block"></p>
                 @if($errors->has('categories'))
                     <p class="help-block">
                         {{ $errors->first('categories') }}
                     </p>
                 @endif
             </div>
            
            <div class="form-group col-md-2 float-left">
                <button type="submit"
                        class="btn btn-main">
                        Search Now
                </button>
            </div>
        </div>

    {!! Form::close() !!}

    
</div>
</center> 
{{-- </div>
  </div> --}}


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
                                {{-- <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                    <div class="category-block" style="border-radius: 61%;
                                    min-height: 272px;">
                                        <div class="header" style="margin-top:30px;">
                                            <i class="{{ $category_all->icon }} icon-bg-{{ $category_all->id }}"></i> 
                                            <h4>
                                                <a href="{{ route('category', [$category_all->id]) }}">{{ $category_all->name }} <p style="display: inline">({{ $category_all->companies->count() }})</p></a> 
                                                
                                            </h4>
                                        </div>
                                      <center>  Automotive 192 or new </center>
                                    </div>
                                </div> <!-- /Category List -->                --}}
                              <div class="col col-12">
                                <div class="section-title" style="padding-top:20px;">
                                    <h2>Find ANY Used Part For ANY </h2>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p> --}}
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
                                        {{-- <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div> --}}
                                        </div>
                                    </div>
                                </a>
                                    {{-- <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p> --}}
                                </div>
                            
                                    
                                <div class="col-md-4">
                                    <a href="/navigation/automotive/3">
                          
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="https://s25180.pcdn.co/wp-content/uploads/2016/07/iStock_62824630_SMALL.jpg" 
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;"> Classical and Muscle Cars<small></small></h3>
                                        {{-- <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div> --}}
                                        </div>
                                    </div>
                                </a>
                                    
                                    {{-- <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p> --}}
                                </div>


                                <div class="col-md-4">
                                    <a href="/navigation/automotive/1">
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="https://autowise.com/wp-content/uploads/2018/03/Street-Legal-Dirt-Bike-KTM.jpg" 
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;"> Street and dirt Motorcycles <small></small></h3>
                                        {{-- <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div> --}}
                                        </div>
                                    </div>
                                </a>

                                    
                                    {{-- <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p> --}}
                                </div>


                                <div class="col-md-4" style="margin-top:30px;">
                                    <a href="/navigation/automotive/4">
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="/images/atv.png" 
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;"> ATV's <small></small></h3>
                                        {{-- <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div> --}}
                                        </div>
                                    </div>
                                </a>

                                    
                                    {{-- <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p> --}}
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
                                        {{-- <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div> --}}
                                        </div>
                                    </div>
                                </a>

                                    
                                    {{-- <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p> --}}
                                </div>

                                

                                <div class="col-md-4" style="margin-top:30px;">
                                    <a href="/navigation/automotive/6">
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="/images/snowbikes.png" 
                                       
                                        alt="profile-image" class="profile"/>
                                        <div class="card-content">
                                        <h2 style="color:white;" > Snowbikes <small></small></h3>
                                        {{-- <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div> --}}
                                        </div>
                                    </div>
                                </a>

                                    
                                    {{-- <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p> --}}
                                </div>
                        </div>
                    

				<!-- Section title -->
				{{-- <div class="section-title" style="padding-top:20px;">
					<h2>Featured Ads</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
				</div> --}}
                {{-- <div class="row" id="ads"> --}}
                    {{-- @foreach ($categories_all->take(8) as $category_all) --}}
                        <!-- Category list -->
                        {{-- <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                            <div class="category-block">
                                <div class="header">
                                    <i class="{{ $category_all->icon }} icon-bg-{{ $category_all->id }}"></i> 
                                    <h4>
                                        <a href="{{ route('category', [$category_all->id]) }}">{{ $category_all->name }} <p style="display: inline">({{ $category_all->companies->count() }})</p></a> 
                                        
                                    </h4>
                                </div>
                                <ul class="category-list">
                                    @foreach ( $category_all->companies->shuffle()->take(4) as $singleCompany)
                                        <li><a href="{{ route('company', [$singleCompany->id]) }}">{{ $singleCompany->name}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> <!-- /Category List -->                --}}

                        {{-- <div class="col-md-3" style="padding-top:30px;">
                            <div class="card rounded">
                                <div class="card-image">
                                    <span class="card-notify-badge">Low KMS</span>
                                    <span class="card-notify-year">2018</span>
                                    <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR55ghbCWvoef1KmgFDUAQVcKVGLlJD7LQfPW9-s1x-9cEkw1SM"
                                     alt="Alternate Text" width="100px"  />
                                </div>
                                <div class="card-image-overlay m-auto">
                                    <span class="card-detail-badge">Used</span>
                                    <span class="card-detail-badge">$28,000.00</span>
                                    <span class="card-detail-badge">13000 Kms</span>
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h5>Honda Accord LX</h5>
                                    </div>
                                    <a class="ad-btn" href="#">View</a>
                                </div>
                            </div>
                        </div> --}}
                    {{-- @endforeach --}}
                    {{-- <a style="padding:20px;" href="#">see more...</a> --}}
                {{-- </div> --}}
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

@stop

