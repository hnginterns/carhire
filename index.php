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
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/styles.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet">  <!-- font-awesome icons -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#about">Location</a></li>
        <li><a href="#">Special Offers</a></li>  
        <li><a href="#">Cars</a></li>  
        <li><a href="#">Contact</a></li>  
        <li><a href="#">Airport Transfer</a></li>   
      </ul>
    </div>
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
<div class="book">
<input type="button" name="Bookbutt" value="Book a car">
 <input type="button" name="modifybutt" value="View or Modify a reservation">
 <div><h3>pick-up Location</h3></div>
   <div>
     <input type="text" class="in" placeholder="City, State or Airport Code"><br>
   </div>
 <div><h3>Pick-up Date & Time</h3></div>
   <div>
     <input type=integer class="in" placeholder="10.07.2017    16.09"><br>
   </div>
 <div><h3>Return Date & Time</h3></div>  
    <div>
     <input type=integer class="in" placeholder="10.07.2017    16.09"><br>
   </div>
  <input type="button" name="Gobutt" value="GO">

   


</div>








<footer>
	<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
  	<div class="row">
  <div class="col-sm-3 footer1" ><img class="center image1" src="http://res.cloudinary.com/siazo/image/upload/v1507562729/car_jyrdnk.png" height="50" width="140"><ul><li>About</li><li>Locations</li><li>Contact Us</li><li>Privacy Policy</li></ul></div>
  <div class="col-sm-3 footer2" id="footer" ><span><b>Product & Services</b></span><ul><li>Vehicles</li><li>Drivers</li><li>Hire Advice</li><li>FAQs</li></ul></div>
  <div class="col-sm-3 footer3" id="footer"><span><b>Our Partners</b></span><ul><li>Hotels.ng</li><li>FAAN</li></ul></div>
  <div class="col-sm-3 footer4" id="footer"><span><b>Follow Us</b></span> <br><br><img src="http://res.cloudinary.com/siazo/image/upload/v1507639912/twitter-256_z1pfxb.png" height="45" width="45" ><img src="https://res.cloudinary.com/siazo/image/upload/v1507639847/linkedin_circle-512_hzqz6w.png"  height="45" width="45" id="icon"><img src="https://res.cloudinary.com/siazo/image/upload/v1507639699/youtube_gm3o65.svg"  height="45" width="45" id="icon"></div>
</div>
</div>
<div class="center-block">2017-CarHire-All Rights Reserved </div>
</footer>
</body>
</html>