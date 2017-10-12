 @extends('layouts.app')
  @section('meta-links')
     <link rel="stylesheet" type="text/css" href="{{asset('css/carlisting.css')}}">
  @endsection
    @section('header')
    @include('partials.header')
   @endsection
@section('content')
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
        </div>
        <div class="head2">
            <p>4 of 8 available vehicle groups are currently shown</p><br>
            <div class="rebox1">
                <img src="1.png" alt="door">
                <p> Models </p>
            </div>
            <div class="rebox2">
                  <img src="2.png" alt="door">
                <p> Doors</p>
            </div>
            <div class="rebox3">
                  <img src="3.png" alt="door">
                <p> Passenger </p>
            </div>
            <div class="rebox4">
                  <img src="4.png" alt="door">
                <p> Transmission</p>
            </div>
        </div>
        
            <p class="clear" />
     </div>
<!--container div for each car starts here-->
      <div class="box">
<!--subcontainer div to house car, car name and price-->
        <div class="car">

        <img src="car.png" alt="car" >
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

        <img src="car.png" alt="car" >
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

        <img src="car.png" alt="car" >
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

        <img src="car.png" alt="car" >
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
       @endsection

      @section('footer')
      @include('partials.footer')
      @endsection