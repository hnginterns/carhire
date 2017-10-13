<!DOCTYPE html>
<html>
<head>
  <title>Home
      
    <?php if(isset($pageTitle)): ?> 
        <?php echo e("CarHire - ".$pageTitle); ?>

    <?php else: ?> 
        <?php echo e("CarHire"); ?>

    <?php endif; ?>
         
  </title>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo e(asset('css/main_css.css')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo e(asset('css/styles.css')); ?>" type="text/css" rel="stylesheet" media="all">  
<link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">  <!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo e(asset('css/flexslider.css')); ?>" type="text/css" media="screen" />
<link href="<?php echo e(asset('css/index2.css')); ?>" type="text/css" rel="stylesheet" media="all">  
<!-- //Custom Theme files --> 
<!-- js -->
 
<!-- //js -->
<!-- web-fonts --> 
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
<!-- //web-fonts -->

</head>
<body>

  <nav class="navbar navbar-inverse ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-    toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
   <ul class="nav navbar-nav navbar-right">
    <!-- <div id="navbar" class="navbar-collapse collapse"> -->
     
        <li><a href="/">Home</a></li>
        <li><a href="/locations">Location</a></li>
        <!-- DROPDOWN <li><a hrefclass="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="icons.html">Web Icons</a></li>
                    <li><a href="codes.html">Short Codes</a></li>
                  </ul></li>
         -->
        <li><a href="/specialoffers">Special Offers</a></li>  
        <li><a href="/car-listing">Cars</a></li>  
        <li><a href="/contact">Contact Us</a></li>  
        <li><a href="/airporttransfer">Airport Transfer</a></li>
        <li><a href="/airporttransfer">Airport Transfer</a></li>   
    <!-- </div> -->
</ul>
  <div class="clearfix"></div>
</div>
      <!--second nav-->
      <!--this nav is described with the center attribute-->
</nav>


<nav class="navbar navbar-inverse nav2" 
id="nav2">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <a class="navbar-brand image" href="#"><img class="center image" src="http://res.cloudinary.com/siazo/image/upload/v1507562729/car_jyrdnk.png" height="50" width="158"></a>
      <ul class="nav navbar-nav navbar-right" id="center">
        <li><a href="#" class="center rent">Rent a car</a></li>
      <li><a href="#" class="center line ">|</a></li>
      <li><a href="/car/create" class="center new">New cars</a></li>
      
      </ul>
    </div>
  </div>
</nav>

<section>
	<div class="bg-cover">
		
	</div>
</section>

  <div class="special-offers container">
    <div class="row">
      <h3 calss="center">Special Offers</h3>
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
          <p class="offers-header">Discover Somewhere New</p>
          <p>Kenya car hire from $200</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="offers">
          <img src="https://i.imgur.com/OlPFtq1.jpg" title="source: imgur.com">
          <p class="offers-header">Discover Somewhere New</p>
          <p>Kenya car hire from $200</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="offers">
          <img src="https://i.imgur.com/OlPFtq1.jpg" title="source: imgur.com">
          <p class="offers-header">Discover Somewhere New</p>
          <p>Kenya car hire from $200</p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="bg-blue">
    <div class="container">
      <div class="deals row">
        <div class="col-sm-6 side-pad row">   
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
          <div class="col-sm-6">
            <i class="fa fa-car"></i>
            <p>1. Reserve a Car</p>
          </div>
          <div class="col-sm-6">
            <i class="fa fa-map-marker"></i>
            <p>2. Go to pick-up point</p>
          </div>
          <div class="col-sm-6">
            <i class="fa fa-credit-card"></i>
            <p>3. Make Payment</p>
          </div>
          <div class="col-sm-6">
            <i class="fa fa-driver"></i>
            <p>4. Drive yourself</p>
          </div>
        </div> 
      </div>
    </div>
  </div>


  <div class="why-hire container text-center">
    <h3>Why Hire a Car with carHire</h3>
    <div class="col-sm-4">
      <div class="fa fa-stack">
        <i class="fa fa-stack-1x fa-car"></i>
        <i class="fa fa-circle-o fa-stack-2x"></i>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="fa fa-stack">
        <i class="fa fa-stack-1x"></i>
        <i class="fa fa-circle-o fa-stack-2x"></i>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="fa fa-stack">
        <i class="fa fa-stack-1x fa-car"></i>
        <i class="fa fa-circle-o fa-stack-2x"></i>
      </div>
    </div>
  </div>

  

<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"><img class="img-responsive" src="http://res.cloudinary.com/siazo/image/upload/v1507562729/car_jyrdnk.png" width="100px"></a></h2>
                    <ul>
                        <li><a href="/about">About</a></li>
                        <li><a href="/locations">Locations</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Products & Services</h5>
                    <ul>
                        <li><a href="#">Vehichles</a></li>
                        <li><a href="/driver-info">Drivers</a></li>
                        <li><a href="#">Hire Advice</a></li>
                        <li><a href="/faq">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Our Partners</h5>
                    <ul>
                        <li><a href="https://hotels.ng">Hotels.ng</a></li>
                        <li><a href="https://http://www.faan.gov.ng">FAAN</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Our Partners</h5>
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="google"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>2017 - CarHire - All Rights Reserved</p>
        </div>
    </footer>
 <script src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script> 
</body>

</html>





