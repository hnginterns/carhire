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
<link rel="stylesheet" href="css/main_css.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styles.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet">  <!-- font-awesome icons -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/dashboard.css" type="text/css" rel="stylesheet" media="all">  
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
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
     
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.html">Location</a></li>
        <!-- DROPDOWN <li><a hrefclass="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="icons.html">Web Icons</a></li>
										<li><a href="codes.html">Short Codes</a></li>
									</ul></li>
         -->
        <li><a href="specialoffers.php">Special Offers</a></li>  
        <li><a href="cars.php">Cars</a></li>  
        <li><a href="contactpage.php">Contact Us</a></li>  
        <li><a href="airporttransfer.html">Airport Transfer</a></li>
        <li><a href="airporttransfer.html">Airport Transfer</a></li>   
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
      <li><a href="#" class="center new">New cars</a></li>
      
      </ul>
    </div>
  </div>
</nav>

	<div class="profile container">
		<div class="row">
		<div class="col-sm-4 side-pad">
			<div class="img-round" style="background-image: url('../img/mypic.png');">
			</div>
			<div class="profile-info"><span>Mofope Ojosh</span></div>
			<p class="text-blue">Name</p>
			<div class="profile-info"><span>0703123456</span></div>
			<p class="text-blue">Number</p>
			<div class="profile-info"><span>mofopet@gmail.com</span></div>
			<p class="text-blue">Email</p>
		</div>
		<div class="col-sm-4 side-pad">
			<div class="img-round" style="background-image: url('../img/mercedes_logos_PNG18.png');">
			</div>
			<div class="profile-info"><span>Sudan</span></div>
			<p class="text-blue">Type</p>
			<div class="profile-info"><span>E-350</span></div>
			<p class="text-blue">Model</p>
			<div class="profile-info"><span>KY-6532</span></div>
			<p class="text-blue">Car No</p>
		</div>
		<div class="col-sm-4 side-pad">
			<div class="img-round" style="background-image: url('../img/nigeria_640.png');"></div>
			<div class="profile-info"><span>15, </span></div>
			<p class="text-blue">Address</p>
			<div class="profile-info"><span>Lagos</span></div>
			<p class="text-blue">State</p>
		</div>
	</div>
	</div>

	<div class="bg-blue">
		<div class="container">
		<div class="skill row">
			<h3>SKILL</h3>
			<div class="col-sm-4 side-pad">		
				<p>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</p>
			</div>
			<div class="col-sm-4 side-pad">		
				<div class="profile-info"><span>25 years</span></div>
				<p class="text-blue">Work/Experience</p>
			</div>
			<div class="col-sm-4 side-pad">
				<br><p><a class="btn-blue">View driver's Lisence</a></p>		
			</div>
		</div>
		<div class="my-pay row">
				<h3>MY PAY</h3>
				<div class="col-sm-4 side-pad">		
					<p class="text-blue">Working Hours/Day</p>
					<p>8 Hours (Negotiable)</p>
				</div>
				<div class="col-sm-4 side-pad">		
					<p  class="text-blue">Payment/Hour</p>
					<p>$10/hr</p>

				</div>
				<div class="col-sm-4 side-pad">		
					<p  class="text-blue">Days of availability</p>
					<p>Mon - Thur, Sat & Sun</p>
				</div>
		</div>
		</div>
	</div>

	<div class="review container">
		<div class="row">
			<div class="col-sm-5 side-pad">
				<h3>Send a Message/Review</h3>
				<p><textarea class="form-review"></textarea></p>
				<p><a class="btn-blue float-right">Submit</a></p>
				<br><br>		
			</div>
			<div class="col-sm-7 side-pad">
				<div class="customer">
					<h3>Customer reviews</h3>
					<p class="customer-review">&quot
					This dude almost killed me, please never ever ask him to ride you anywhere, I really winder what he did during the 25 years of experience, please I prefer scooby doo to this guy
					&quot</p>
				</div>
			</div>
		</div>
	</div>

<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"><img class="img-responsive" src="http://res.cloudinary.com/siazo/image/upload/v1507562729/car_jyrdnk.png" width="100px"></a></h2>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Products & Services</h5>
                    <ul>
                        <li><a href="#">Vehichles</a></li>
                        <li><a href="#">Drivers</a></li>
                        <li><a href="#">Hire Advice</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Our Partners</h5>
                    <ul>
                        <li><a href="#">Hotels.ng</a></li>
                        <li><a href="#">FAAN</a></li>
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

</body>

</html>