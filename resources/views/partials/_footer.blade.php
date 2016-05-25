<footer class="footer delayed-view fadein">
	<div id="footer-menu" class="row">
		<!-- <div > -->
		<ul class="list-inline text-center">
			<li class="col-xs-2 col-sm-1 col-xs-offset-2 col-sm-offset-4"><a href="/">Home</a></li>
			<li class="col-xs-2 col-sm-1"><a href="{{ action("PagesController@getAbout") }}">About</a></li>
			<li class="col-xs-2 col-sm-1"><a href="{{ action("PagesController@getGallery") }}">Gallery</a></li>
			<li class="col-xs-2 col-sm-1"><a href="{{ action("PagesController@getContact") }}">Contact</a></li>
		</ul>
		<!-- </div> -->
	</div>
	<div id="footer-description" class="hidden">
		<p>Grahaya adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="copyright text-center">
		<p>© 2016 Grahaya. All Rights Reserved.</p>
	</div>
	@if (Auth::check())
		<div class="text-center">
			<a href="{{ action("UsersController@getLogout") }}">Logout</a>
		</div>
	@endif
</footer>

