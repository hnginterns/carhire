 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Contact Form</title>

    
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/contactpage.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

 @include('partials.header')


   <div style="width: 700px; margin-left: 20%">
<form class="form-horizontal" method="POST" action="/car/" enctype="multipart/form-data">
                        {{ csrf_field() }}

                          @if (session()->has('data'))
                            <div class="text-center alert alert-success">{{session('data')}}</div>  
                           @endif
                       
                        <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><span style="color: #18BC9C;" ></span></label>

                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="brand" value="{{ old('brand') }}" placeholder="Car Brand e.g Totoyota Corrolla">

                                @if ($errors->has('brand'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                            <label for="model" class="col-md-4 control-label"><span style="color:#18BC9C;" ></span></label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" placeholder="Car model  e.g Toyota Corolla">

                                @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('car_price') ? ' has-error' : '' }}">
                            <label for="car_price" class="col-md-4 control-label"><span style="color:#18BC9C;" ></span></label>

                            <div class="col-md-6">
                                <input id="car_price" type="text" class="form-control" name="car_price" placeholder="Booking car_price">

                                @if ($errors->has('car_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('car_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label"><span style="color:green; font-size: xx-large;"  class="fa fa-file-photo-o" ></span></label>

                            <div class="col-md-6">
                                <input id="image" type="file" name="image" ">
                                <p>Upload Car image </p>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                 Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

             
                @include('partials.footer')

</body>
</html>