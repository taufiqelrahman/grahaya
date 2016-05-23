<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noimageindex"></meta>
<!-- <meta name="csrf-token" content="{{ csrf_token() }}" /> -->
<title>Grahaya | {{$title}}</title>
<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="/slick/slick.css"/> -->
<!-- <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/> -->
<!-- <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'> -->
<!-- <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> -->
<!-- <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'> -->
<!-- <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}"> -->
<!-- <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'> -->
</head>
<body>
<main>
	@include('/partials/_nav')
    @if(Request::path() === '/')
        @include('/partials/_slider')
    @endif
    <div class="container-fluid {{$title}}-content content">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
        @yield('content')
    </div>
    @include('/partials/_footer')
</main>

<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<!-- <script type="text/javascript" src="{{ asset('/js/jquery-1.12.1.min.js') }}"></script> -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
<!-- <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{ asset('/js/fcsaNumber.js') }}"></script> -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<!-- <script type="text/javascript" src="/slick/slick.min.js"></script> -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
//maps
var myCenter=new google.maps.LatLng(-7.842535, 110.381642);
var marker;
function initialize() {
  var mapProp = {
    center:myCenter,
    zoom:14,
  disableDefaultUI:true,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  var marker=new google.maps.Marker({
  position:myCenter,
  icon:'/images/pointer.png'
  // animation:google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>