<!Doctype html>
<html lang "en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CarHire|About Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
  <link href="{{asset('css/about.css')}}" rel="stylesheet">
   <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
</head>

<body>
  <header>
        @include('partials.header')
  </header>
  <!-- top section -->
    <!-- container for top bg image -->
    <div id="top-image"></div>


  <div class="container-fluid bg-vision">
    <div class="container vision">
      <div>
        <h3>VISION</h3>
      </div>
      
      <div class="quotes">
          <p>The customer is the most important perso in our business. The customer is not an interruption of our work - they are the purpose of it. We are not doing the customer a favour in our service - the customer is giving us an opportunity to do so. The customer is not dependent on us - we are dependent on them. the customer is not an outsider to our business - they are a central part of it. The customer is not a cold statistic - they are flesh and blood, human beings wiht feelings and emotions, opinions and perspectives. The customer is not someone to argue or match wits with, there is no argument to be won with the customer. The customer is someone who brings us their needs and in the end, it is our job to handle them.</p>
      </div>

    </div>
  </div>
  <!-- end top section -->

  <!-- history section -->
  <section class="history container-fluid">
    <div class="container history">
      <h3>HISTORY</h3>
      <div id="carousel-example-generic" class="carousel slide ro" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="row row-eq-height">
              <div class="col-md-6">
                <!-- image here --><img class="img-responsive" src="http://res.cloudinary.com/bogadeji/image/upload/q_auto,f_auto/v1507728777/Rectangle_3_p5obpm.png" alt="First slide">
              </div>
              <div class="col-md-6">
                <h5>Lorem ipsum dolor sit amet</h5>
                <!-- paragraph her -->
                <p>More than 2,200 locations in over 100 countries, market leader in Nigeria and expanding worldwide. The largest premium car fleet in the world, with offers ranging from a small car to SUV, from electric vehicles to luxury sports cars as well as vans and trucks up to 11.00t. Limousine service offered in over 600 cities worldwide. CarHire Unlimited, the rental-car flat rate for unlimited mobility. </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row row-eq-height">
              <div class="col-md-6">
                <!-- image here --><img class="img-responsive" src="http://res.cloudinary.com/bogadeji/image/upload/q_auto,f_auto/v1507728777/Rectangle_3_p5obpm.png" alt="Second slide">
              </div>
              <div class="col-md-6">
                <!-- paragraph her -->
                <p>More than 2,200 locations in over 100 countries, market leader in Nigeria and expanding worldwide. The largest premium car fleet in the world, with offers ranging from a small car to SUV, from electric vehicles to luxury sports cars as well as vans and trucks up to 11.00t. Limousine service offered in over 600 cities worldwide. CarHire Unlimited, the rental-car flat rate for unlimited mobility. </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row row-eq-height">
              <div class="col-md-6">
                <!-- image here --><img class="img-responsive" src="http://res.cloudinary.com/bogadeji/image/upload/q_auto,f_auto/v1507728777/Rectangle_3_p5obpm.png" alt="Third slide">
              </div>
              <div class="col-md-6">
                <!-- paragraph her -->
                <p>More than 2,200 locations in over 100 countries, market leader in Nigeria and expanding worldwide. The largest premium car fleet in the world, with offers ranging from a small car to SUV, from electric vehicles to luxury sports cars as well as vans and trucks up to 11.00t. Limousine service offered in over 600 cities worldwide. CarHire Unlimited, the rental-car flat rate for unlimited mobility. </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
      </div>
    </div>
  </section>
  <!-- end history section -->

  <!-- product section -->
  <div class="container-fluid bg-product bg-testimonial">
    <h3>PRODUCT</h3>
    <div class="container">
      <div class="row">
        <!-- first main banner -->
        <div class="col-md-12 elem1" style="background: white">
          <div class="col-md-4 hero-padding">
            <div>
              <h3>CarHire</h3>
              <p>More than 2,200 locations in over 100 countries, market leader in Nigeria and expanding worldwide.</p>
              <button class="btn btn-primary btn-padding">MORE</button>
            </div>
          </div>
          <div class="col-md-8 elem2">
            <img class="img-responsive" src="http://res.cloudinary.com/bogadeji/image/upload/q_auto,f_auto/v1507728809/Rectangle_5_xj8zxu.png">
          </div>
        </div>
        <!-- end first main banner -->


        <div class="col-md-12 elem3">
          <div class="col-md-4 elem2 hide-on-small">
            <img class="img-responsive" src="http://res.cloudinary.com/bogadeji/image/upload/q_auto,f_auto/v1507728839/Rectangle_11_aayjhg.png">
          </div>
          <div class="col-md-8">
            <div class="row elem1">
              <div class="col-md-4 hero-padding">
                <div>
                  <h3>CarHire</h3>
                  <p>More than 2,200 locations in over 100 countries, market leader in Nigeria and expanding worldwide.</p>
                  <button class="btn btn-primary btn-padding">MORE</button>
                </div>
              </div>
              <div class="col-md-8 elem2">
                <img class="img-responsive" src="http://res.cloudinary.com/bogadeji/image/upload/q_auto/v1507728966/Rectangle_21_htf94s.png" style="width: 900px;">
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row elem1">
              <div class="col-md-4 hero-padding">
                <div>
                  <h3>CarHire</h3>
                  <p>More than 2,200 locations in over 100 countries, market leader in Nigeria and expanding worldwide.</p>
                  <button class="btn btn-primary btn-padding">MORE</button>
                </div>
              </div>
              <div class="col-md-8 elem2">
                <img class="img-responsive" src="http://res.cloudinary.com/bogadeji/image/upload/q_auto/v1507728966/Rectangle_21_htf94s.png" style="width: 900px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end product section -->

  <!--CAMPAIGNS-->
  <div class="container-fluid bg-campaign">
    <div class="container">    
    <h3 id="campain">CAMPAIGNS</h3>
      <div class="row">
        <div class="col-sm-6">
          <img src="http://mediacdn.hotels.ng/hotels/v52/img/DSC_4414-2.jpg" width="100%">
        </div>
        <div class="col-sm-6">
          <img src="http://mediacdn.hotels.ng/hotels/v52/img/DSC_4414-2.jpg" width="100%">
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="http://mediacdn.hotels.ng/hotels/v52/img/DSC_4414-2.jpg" width="100%">
        </div>
        <div class="col-sm-6">
          <img src="http://mediacdn.hotels.ng/hotels/v52/img/DSC_4414-2.jpg" width="100%">
        </div>
      </div>
    </div>
    <br>
  </div>
  <!-- end CAMPAIGNS-->

  <!-- success section -->
  <div class="success container-fluid">
  <div class="container">
    <h3 id="campain">SUCCESS</h3>
    <div id="succes-write">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <br>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
  <!-- end success section-->


  <!-- meet the carhire family -->
  <div class="container-fluid  bg-meet">
    <div class="container">
      <h2 class="text-center team">MEET THE CARHIRE FAMILY</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel slide" data-ride="carousel" id="family-carousel">
              <!-- Carousel Slides / Quotes -->
              <div class="carousel-inner text-center">
                <!-- Quote 1 -->
                <div class="item active">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="row img-center">
                          <img src="https://api.adorable.io/avatars/285/badass.png" class="ellipse img-responsive col-md-3">
                        </div>
                        <i class="fa fa-quote-left fa-3x pull-left" aria-hidden="true"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- Quote 2 -->
                <div class="item">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="rom img-center">
                          <img src="https://api.adorable.io/avatars/285/frontend.png" class="ellipse img-responsive col-md-3">
                        </div>
                        <i class="fa fa-quote-left fa-3x pull-left" aria-hidden="true"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- Quote 3 -->
                <div class="item">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="row img-center">
                          <img src="https://api.adorable.io/avatars/285/team.png" class="ellipse img-responsive col-md-3">
                        </div>
                        <i class="fa fa-quote-left fa-3x pull-left" aria-hidden="true"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
              </div>
              <a data-slide="prev" href="#family-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
              <a data-slide="next" href="#family-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end medt the carhire family section-->
  <!-- testimonial section -->
  <div class="container-fluid bg-testimonial">
    <div class="container">
      <h2 class="text-center team">TESTIMONIALS</h2>
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner text-center">
              <!-- Quote 1 -->
              <div class="item active">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <div class="testimonial">
                        <h4>Lorem testimonial title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
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
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#testimonial-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://api.adorable.io/avatars/285/this.png" alt="">
              </li>
              <li data-target="#testimonial-carousel" data-slide-to="1"><img class="img-responsive" src="https://api.adorable.io/avatars/285/awesome.png" alt="">
              </li>
              <li data-target="#testimonial-carousel" data-slide-to="2"><img class="img-responsive" src="https://api.adorable.io/avatars/285/spiderman.png" alt="">
              </li>
            </ol>
            <!-- Carousel Buttons Next/Prev -->
            <a data-slide="prev" href="#testimonial-carousel" class="left carousel-control carousel-link"><i class="fa fa-chevron-left left-carousel-button"></i></a>
            <a data-slide="next" href="#testimonial-carousel" class="right carousel-control carousel-link"><i class="fa fa-chevron-right right-carousel-button"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end testimonial section -->
  <!-- management board section -->
  <div class="container-fluid bg-management">
    <div class="container">
      <h2 class="text-center team">MANAGEMENT BOARD</h2>
      <div class="text-center details row">
        <div class="col-md-2 col-xs-12 col-md-offset-1">
          <img src="https://api.adorable.io/avatars/285/mark.png" class="ellipse img-responsive">
          <h4>Lorem name</h4>
          <p>lorem title</p>
        </div>
        <div class="col-md-2 col-xs-12">
          <img src="https://api.adorable.io/avatars/285/essien.png" class="ellipse img-responsive">
          <h4>Lorem name</h4>
          <p>lorem title</p>
        </div>
        <div class="col-md-2 col-xs-12">
          <img src="https://api.adorable.io/avatars/285/rogue.png" class="ellipse img-responsive">
          <h4>Lorem name</h4>
          <p>lorem title</p>
        </div>
        <div class="col-md-2 col-xs-12">
          <img src="https://api.adorable.io/avatars/285/wolverine.png" class="ellipse img-responsive">
          <h4>Lorem name</h4>
          <p>lorem title</p>
        </div>
        <div class="col-md-2 col-xs-12">
          <img src="https://api.adorable.io/avatars/285/professor.png" class="ellipse img-responsive">
          <h4>Lorem name</h4>
          <p>lorem title</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end management board section -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <footer>
        @include('partials.footer')
</footer>
</body>

</html>
