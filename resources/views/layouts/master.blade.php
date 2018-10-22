<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noimageindex"></meta>
<!-- <meta name="csrf-token" content="{{ csrf_token() }}" /> -->
<title>Grahaya Panti Asuhan | {{$title}}</title>
<meta name=”description” content=”Grahaya adalah panti asuhan berlokasi di Jl. Pasopati, Tamanan, Banguntapan, Kauman, Tamanan, Bantul, Daerah Istimewa Yogyakarta 55191.
Dengan niatan untuk mengamalkan surat Al-Maun sekaligus membuka jalana atau peluang bersama untuk beramal soleh sesuai konsep penciptaan manusia sebagai rahmatan lil alamin“/>
<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('/css/lightbox.min.css') }}">
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
<main class="{{$title}}-main">
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

<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- <script type="text/javascript" src="{{ asset('/js/jquery-1.12.1.min.js') }}"></script> -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
<!-- <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{ asset('/js/fcsaNumber.js') }}"></script> -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<!-- <script type="text/javascript" src="/slick/slick.min.js"></script> -->
<script type="text/javascript" src="{{ asset('/js/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/lightbox.min.js') }}"></script>
<script>
$(window).load(function(){
  if (location.pathname === '/gallery') {
    //gallery
    $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      // gutter: 20,
      // fitWidth: true
      columnWidth: '.grid-item',
      percentPosition: true
    });

    //hover on gallery-photos
    $(".grid-item").mouseenter(function(){
      $(this).find(".grid-desc").stop().fadeIn();
        }).mouseleave(function(){
      $(this).find(".grid-desc").stop().fadeOut();
        }
    );
  }

  if (location.pathname === '/about') {
    //hover on about-photos
    $(".photo").mouseenter(function(){
      $(this).find(".photo-desc").stop().fadeOut();
        }).mouseleave(function(){
      $(this).find(".photo-desc").stop().fadeIn();
        }
    );
  }
});
//maps
var marker;
var map;
function initMap() {
  if (location.pathname !== "/contact") return;
  var myCenter=new google.maps.LatLng(-7.842535, 110.381642);
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
// google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCNFL8DUPyxCiAYwiFXZS1CFcPFtOQD5Fg&callback=initMap" async defer></script>
</body>
</html>