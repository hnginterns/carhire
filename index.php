<!DOCTYPE html>
<html>
<head>
  <title>Home
      <?php 
    if (isset($pageTitle)) {
        echo "CarHire - ".$pageTitle;
    } else {
        echo "CarHire";
    }
    ?>      
  </title>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->

<!--<link href="css/styles.css" type="text/css" rel="stylesheet" media="all"> -->

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link href="css/font-awesome.css" rel="stylesheet">  <!-- font-awesome icons -->
<link href="css/index2.css" type="text/css" rel="stylesheet" media="all">  
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery.flexslider.js"></script>  
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts --> 
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
<!-- //web-fonts -->

</head>
<body>
<header>
  <?php include('header1.php'); ?>

 </header>


	<div class="top-image" align="center">
		<img src="http://res.cloudinary.com/bogadeji/image/upload/q_auto,f_auto/v1507729051/Rectangle_12_ykepwm.png" width="100%">
	</div>

	<div class="container mid-section white-color">
		<div class="row">

			<div class="col-md-9 col-md-offset-1">
				<div class="myshadow">
					<button class="btn btn-primary">Book Now</button>&nbsp;&nbsp;&nbsp;&nbsp; |
					<span>View or Modify a reservation</span>
				</div>
			</div>

			<div class="col-md-3 col-md-offset-1">
				<div class="myshadow">
					<b>Pick-up Location</b><br /><br />
					<input class="form-control" type="text" name="location" placeholder="City, State or Airport Code">
				</div>
			</div>

			<div class="col-md-3">
				<div class="myshadow">
					<b>Pick-up Date &amp; Time</b><br /><br />
					<input class="form-control" type="date" name="location" placeholder="City, State or Airport Code">
				</div>
			</div>

			<div class="col-md-3">
				<div class="myshadow">
					<b>Return Date</b><br /><br />
					<input class="mycontrol" type="date" name="location" placeholder="City, State or Airport Code">
					<button class="btn btn-primary">GO</button>

				</div>

			</div>




		</div>
	</div>

	<!-- special offers -->
	<div class="special-offers container">
    <div class="row">
    <div class="col-sm-1 arrow">
      <span class="fa-stack fa-md">
      	<div class="down">
      <i class="fa fa-chevron-left left-carousel-button"></i>
      <i class="fa fa-chevron-left left-carousel-button"></i>
      	</div>
      </span>
    </div>
    <div class="col-sm-9 container">
      <h3 calss="text-center">Special Offers</h3>
      <div class="row">
        <p class="col-sm-2">Featured Offers</p>
        <p class="col-sm-2">Partners Offers</p>
        <p class="col-sm-2">Local offers</p>
        <p class="col-sm-2">Van Special</p>
        <p class="col-sm-2">Global Destination</p>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="offers">
            <img src="https://i.imgur.com/OlPFtq1.jpg" title="source: imgur.com">
              <span class="black-bold">Discover Somewhere New</span>
              <span>Kenya car hire from $200</span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="offers">
            <img src="https://i.imgur.com/OlPFtq1.jpg" title="source: imgur.com">
            <span class="black-bold">Discover Somewhere New</span>
            <span>Kenya car hire from $200</span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="offers">
            <img src="https://i.imgur.com/OlPFtq1.jpg" title="source: imgur.com">
            <span class="black-bold">Discover Somewhere New</span>
            <span>Kenya car hire from $200</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-1 arrow">
      <span class="fa-stack fa-md">
      <i class="fa fa-chevron-right right-carousel-button"></i>
      <i class="fa fa-angle-right fa-stack-1x"></i>
      </span>
    </div>
  </div>
  </div>


<div class="container-fluid bg-blue">
	<div class="row">

		<div class="mypad">
			<div class="col-md-6">
				<h3>Best Deals on the Go!</h3><br />
				<b>Get carHire on your mobile phone</b><br /><br />

				<a href="https://imgur.com/QyMRM8H"><img src="https://i.imgur.com/QyMRM8H.png" title="source: imgur.com" width="20%" /></a>

				<a href="https://imgur.com/lpnZcYb"><img src="https://i.imgur.com/lpnZcYb.png" title="source: imgur.com" width="20%" /></a>

				<br /><br /><br /><br />
			</div>

			<div class="col-md-6">

				<div class="col-md-6">
					 <i class="fa fa-car fa-5x text-blue"></i><br /><br />
					 <p>1. Reserve a Car</p>
				</div>

				<div class="col-md-6">
					 <i class="fa fa-map-marker fa-5x text-blue"></i><br /><br />
					 <p>2. Go To Pick Up Point.</p>
				</div>

				<div class="col-md-6">
					 <i class="fa fa-car fa-5x text-blue"></i><br /><br />
					 <p>3. Make Payment</p>
				</div>

				<div class="col-md-6">
					 <i class="fa fa-money fa-5x text-blue"></i><br /><br />
					 <p>4. Drive Yourself</p>
				</div>

			</div>
		</div>

	</div>
</div><br /><br /><br /><br /><br />


<div class="container-fluid bg-testimonial">
    <div class="container">
      <h2 class="text-center team">TESTIMONIALS</h2>
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
            
            <div class="carousel-inner text-center">
              <!-- Quote 1 -->
              <div class="item active">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="testimonial">
                        <h4>Lorem testimonial title</h4>
                        <p>Lora ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                        <small>Someone famous</small>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 2 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="testimonial">
                        <h4>Lorem testimonial title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                        <small>Some other famous person</small>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 3 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="testimonial">
                        <h4>Lorem testimonial title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                        <small>Another famous person</small>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            
                      </div>
        </div>
      </div>
    </div>
  </div>












	
  <!-- <div class="special-offers container">
    <div class="row">
    <div class="col-sm-1 arrow">
      <span class="fa-stack fa-md">
      <i class="fa fa-stack-2x fa-square text-whittish"></i>
      <i class="fa fa-angle-left fa-stack-1x"></i>
      </span>
    </div>
    <div class="col-sm-10 container">
      <h3 calss="text-center">Special Offers</h3>
      <div class="row">
        <p class="col-sm-2">Featured Offers</p>
        <p class="col-sm-2">Partners Offers</p>
        <p class="col-sm-2">Local offers</p>
        <p class="col-sm-2">Van Special</p>
        <p class="col-sm-2">Global Destination</p>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="offers">
            <img src="https://i.imgur.com/OlPFtq1.jpg" title="source: imgur.com">
              <span class="black-bold">Discover Somewhere New</span>
              <span>Kenya car hire from $200</span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="offers">
            <img src="https://i.imgur.com/OlPFtq1.jpg" title="source: imgur.com">
            <span class="black-bold">Discover Somewhere New</span>
            <span>Kenya car hire from $200</span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="offers">
            <img src="https://i.imgur.com/OlPFtq1.jpg" title="source: imgur.com">
            <span class="black-bold">Discover Somewhere New</span>
            <span>Kenya car hire from $200</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-1 arrow">
      <span class="fa-stack fa-md">
      <i class="fa fa-stack-2x fa-square text-whittish"></i>
      <i class="fa fa-angle-right fa-stack-1x"></i>
      </span>
    </div>
  </div>
  </div> -->

  <div class="bg-blue">
    <div class="container">
      <div class="deals row">
        <div class="col-sm-6 container">   
          <h4>Best Deals on the Go!</h4>
          <p>Get carHire on your mobile phone</p>
          <a href="">
            <p>GET IT ON</p>
            <p>Google Play</p>
          </a>
          <a href="">
            <p>Download on the</p>
            <p>App Store</p>
          </a>
        </div>
        <div class="col-sm-6 side-pad center">   
          <div class="col-xs-6 text-center">
            <i class="fa fa-car fa-lg text-blue"></i>
            <p>1. Reserve a Car</p>
          </div>
          <div class="col-xs-6 text-center">
            <i class="fa fa-map-marker fa-lg text-blue"></i>
            <p>2. Go to pick-up point</p>
          </div>
          <div class="col-xs-6 text-center">
            <i class="fa fa-credit-card fa-lg text-blue"></i>
            <p>3. Make Payment</p>
          </div>
          <div class="col-xs-6 text-center">
            <i class="fa fa-driver fa-lg text-blue"></i>
            <p>4. Drive yourself</p>
          </div>
        </div> 
      </div>
    </div>
  </div>


  <div class="why-hire container text-center">
    <h3>Why Hire a Car with carHire</h3>
    <div class="col-sm-4">
      <span class="fa-stack fa-lg">
        <i class="fa fa-stack-2x fa-circle text-blue"></i>
        <i class="fa fa-stack-1x fa-car text-white"></i>
      </span>
    </div>
    <div class="col-sm-4">
      <span class="fa-stack fa-lg">
        <i class="fa fa-stack-2x fa-circle text-blue"></i>
        <i class="fa fa-stack-1x fa-car text-white"></i>
      </span>
    </div>
    <div class="col-sm-4">
      <span class="fa-stack fa-lg">
        <i class="fa fa-stack-2x fa-circle text-blue"></i>
        <i class="fa fa-stack-1x fa-car text-white"></i>
      </span>
    </div>
  </div>

  <div class="bg-blue">
    <div class="container">
      <div class="testimonials row">
        <div class="row">   
          <div role="complementary" class="simple quotes no-fouc container">
              <blockquote class="quote-card blue-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id quam lorem. Ut dictum in tellus eget blandit. Phasellus volutpat sem vitae diam vehicula dapibus. Suspendisse a turpis vitae purus lacinia vehicula. Aenean sollicitudin sodales nisi et rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</blockquote>
              <blockquote class="quote-card blue-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id quam lorem. Ut dictum in tellus eget blandit. Phasellus volutpat sem vitae diam vehicula dapibus. Suspendisse a turpis vitae purus lacinia vehicula. Aenean sollicitudin sodales nisi et rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</blockquote>
              <blockquote class="quote-card blue-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id quam lorem. Ut dictum in tellus eget blandit. Phasellus volutpat sem vitae diam vehicula dapibus. Suspendisse a turpis vitae purus lacinia vehicula. Aenean sollicitudin sodales nisi et rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</blockquote>
          </div>
        </div>
        <div class="col-sm-6 side-pad center"> 
            <div class="row">  
              <div class="col-sm-2">
                <div class="img-round">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="img-round">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="img-round">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="img-round">
                </div>
              </div>
            </div>
        </div> 
      </div>
    </div>
  </div>


  

  <?php include('footer1.php') ?>

<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript">
  $(function() {
  $('.flexslider').flexslider({
    animation: 'slide'
  });
});
</script>
</body>

</html>
