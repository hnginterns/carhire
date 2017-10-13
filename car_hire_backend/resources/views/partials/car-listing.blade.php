<!Doctype html>
<html>
<head>

  <title>Car Listing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/carlisting.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">

    <link rel="stylesheet" media="only screen and (min-width: 320px)" href="css/carlisting2.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
</head>
<style>
@media only screen and (min-width: 450px) {
      .first, .second, ul{
        float:left;
        width:50%;
        margin:0;
    }

 .reserve{
    margin-top: -.6%;
    margin-left:3%;
}
#price{
    margin-top:2%;
}
.head1 p {
    text-align:center;
}
}
@media only screen and (min-width: 720px) {
.rebox1, .rebox2, .rebox3, .rebox4{
    width:24%;
}
.head2{
    margin-left: 3%;
}
.rebox1 img{
    margin-top: 13%;
}
.rebox1 p{
    margin-top:-8%;
}
.rebox2 img{
    margin-top: 20%;
}
.rebox3 img{
    margin-top: 20%;
}
.rebox4 img{
    margin-top: 20%;
}
 .car img{
    width: 50%;
    height: 50%;
}
.text{
    text-align: left;
    margin-right:13%;
    float:right;
    margin-top:-23%;
}
#price p .prices{
    float:left;
    margin-top:1%;
    font-weight: lighter;
    margin-left:30%;
    color:#007BCA;
    font-size: .8em;
    line-height: 2em;
}
#price p .NGN{
    margin-left:-30%;
}
.box{
    font-size:1em;
}
}


@media only screen and (min-width: 1100px) {
    body{
      font-weight:700;
    font-family: 'Roboto', sans-serif;
}
p{
    margin: 0;
}
}

</style>
   
<body>


    <header>
          @include('partials.header') 
  </header>
    

       <div class="headcontent">
        <div class="head1">
            <p>Vehicle Models</p>
            <form>
                <p>Display models for Nigeria</p>
                <select>
                    <option value="red">Nigeria</option>
                    <option value="red">Kenya</option>
                    <option value="red">Nairobi</option>
                </select>
                <select>
                    <option value="red">Nigeria</option>
                    <option value="red">Kenya</option>
                    <option value="red">Nairobi</option>
                </select>
            </form>
                <p class="clear" />
        </div>
        <div class="head2">
            <p>4 of 8 available vehicle groups are currently shown</p><br>
            <div class="rebox1">
                <img src="{{asset('1.png')}}" alt="door">
                <p> Models </p>
            </div>
            <div class="rebox2">
                  <img src="{{asset('images/2.png')}}" alt="door">
                <p> Doors</p>
            </div>
            <div class="rebox3">
                  <img src="{{asset('images/3.png')}}" alt="door">
                <p> Passenger </p>
            </div>
            <div class="rebox4">
                  <img src="{{asset('images/4.png')}}" alt="door">
                <p> Transmission</p>
            </div>
        </div>
        
            <p class="clear" />
     </div>
<!--container div for each car starts here-->
      <div class="box">
<!--subcontainer div to house car, car name and price-->
        <div class="car">

        <img src="{{asset('images/car.png')}}" alt="car" >
        <div class="text">
              <h3> Car Name | ECAR</h3>
              <h3>Hyundai Accent, Chevrolet Spark</h3>
        </div>
      
            <p class="clear" />

            <div id="price"> 
                <p>
                    <span class="prices">prices per day</span> 
                    <span class="NGN">NGN</span> 
                    <span class="number">499.26 </span> 
                    </p>
             </div>
         </div>
    
<!--subcontainer div to house car details and reserve-->
        <div class="car-details">
            <div class="first">
                <ul >
                    <li><span>5 Airconditioners</span></li>
                    <li><span>4 Doors</span></li>
                    <li><span>1 Air Bag</span></li>
                    <li><span>5 Seats</span></li>
                </ul>
            </div>
        
            <div  class="second">
            <ul>
                <li><span>5 Children</span></li>
                <li><span>5 Adults</span></li>
                <li><span>5 Suitcases</span></li>
                <li><span>5 Leg Room</span></li>
           </ul>
           </div>
        
        <p class="clear" />
            <div class="reserve">
                <p>RESERVE NOW</p>
            </div>
        </div>
        <p class="clear" />
      </div>
      <!--container div for each car ends here-->
      <!--container div for each car starts here-->
      <div class="box">
<!--subcontainer div to house car, car name and price-->
        <div class="car">

        <img src="{{asset('images/car.png')}}" alt="car" >
        <span class="text">
              <h3> Car Name | ECAR</h3>
              <h3>Hyundai Accent, Chevrolet Spark</h3>
        </span>
      
            <p class="clear" />

            <div id="price"> 
                <p>
                    <span class="prices">prices per day</span> 
                    <span class="NGN">NGN</span> 
                    <span class="number">499.26 </span> 
                    </p>
             </div>
         </div>
    
<!--subcontainer div to house car details and reserve-->
        <div class="car-details">
            <div class="first">
                <ul >
                    <li><span>5 Airconditioners</span></li>
                    <li><span>4 Doors</span></li>
                    <li><span>1 Air Bag</span></li>
                    <li><span>5 Seats</span></li>
                </ul>
            </div>
        
            <div  class="second">
            <ul>
                <li><span>5 Children</span></li>
                <li><span>5 Adults</span></li>
                <li><span>5 Suitcases</span></li>
                <li><span>5 Leg Room</span></li>
           </ul>
           </div>
        
        <p class="clear" />
            <div class="reserve">
                <p>RESERVE NOW</p>
            </div>
        </div>
        <p class="clear" />
      </div>
      <!--container div for each car ends here-->

      <!--container div for each car starts here-->
      <div class="box">
<!--subcontainer div to house car, car name and price-->
        <div class="car">

        <img src="{{asset('images/car.png')}}" alt="car" >
        <span class="text">
              <h3> Car Name | ECAR</h3>
              <h3>Hyundai Accent, Chevrolet Spark</h3>
        </span>
      
            <p class="clear" />

            <div id="price"> 
                <p>
                    <span class="prices">prices per day</span> 
                    <span class="NGN">NGN</span> 
                    <span class="number">499.26 </span> 
                    </p>
             </div>
         </div>
    
<!--subcontainer div to house car details and reserve-->
        <div class="car-details">
            <div class="first">
                <ul >
                    <li><span>5 Airconditioners</span></li>
                    <li><span>4 Doors</span></li>
                    <li><span>1 Air Bag</span></li>
                    <li><span>5 Seats</span></li>
                </ul>
            </div>
        
            <div  class="second">
            <ul>
                <li><span>5 Children</span></li>
                <li><span>5 Adults</span></li>
                <li><span>5 Suitcases</span></li>
                <li><span>5 Leg Room</span></li>
           </ul>
           </div>
        
        <p class="clear" />
            <div class="reserve">
                <p>RESERVE NOW</p>
            </div>
        </div>
        <p class="clear" />
      </div>
      <!--container div for each car ends here-->

      <!--container div for each car starts here-->
      <div class="box">
<!--subcontainer div to house car, car name and price-->
        <div class="car">

        <img src="{{asset('images/car.png')}}" alt="car" >
        <span class="text">
              <h3> Car Name | ECAR</h3>
              <h3>Hyundai Accent, Chevrolet Spark</h3>
        </span>
      
            <p class="clear" />

            <div id="price"> 
                <p>
                    <span class="prices">prices per day</span> 
                    <span class="NGN">NGN</span> 
                    <span class="number">499.26 </span> 
                    </p>
             </div>
         </div>
    
<!--subcontainer div to house car details and reserve-->
        <div class="car-details">
            <div class="first">
                <ul >
                    <li><span>5 Airconditioners</span></li>
                    <li><span>4 Doors</span></li>
                    <li><span>1 Air Bag</span></li>
                    <li><span>5 Seats</span></li>
                </ul>
            </div>
        
            <div  class="second">
            <ul>
                <li><span>5 Children</span></li>
                <li><span>5 Adults</span></li>
                <li><span>5 Suitcases</span></li>
                <li><span>5 Leg Room</span></li>
           </ul>
           </div>
        
        <p class="clear" />
            <div class="reserve">
                <p>RESERVE NOW</p>
            </div>
        </div>
        <p class="clear" />
      </div>
      <!--container div for each car ends here-->

 <footer>
    @include('partials.footer')
</footer>

</body>
</html>