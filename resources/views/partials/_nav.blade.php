<nav id="main-nav" class="navbar navbar-default" data-spy="affix" data-offset-top="1">
  <div class="container-fluid">
    <div id="logo" class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarmenu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">
        <!-- <img class="img-responsive center-block to-left" src="{{ asset('/images/logo.png') }}"> -->
        Grahaya
      </a>
    </div>
    <div id="navbarmenu" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">              
        <li class="{{ (Request::is('/')) ? 'active' : '' }}">
          <a href="/">Home</a>
        </li>
        <li class="{{ (Request::is('about')) ? 'active' : '' }}">
          <a href="{{ action("PagesController@getAbout") }}">About</a>
        </li>
        <li class="{{ (Request::is('gallery')) ? 'active' : '' }}">
          <a href="{{ action("PagesController@getGallery") }}">Gallery</a>
        </li>
        <li class="{{ (Request::is('contact')) ? 'active' : '' }}">
          <a href="{{ action("PagesController@getContact") }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>