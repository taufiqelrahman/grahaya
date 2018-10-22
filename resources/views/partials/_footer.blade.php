<footer class="footer delayed-view fadein">
	<div id="footer-menu" class="row">
		<!-- <div > -->
		<ul class="list-inline text-center">
			<li class="col-xs-2 col-sm-1 col-xs-offset-2 col-sm-offset-4"><a href="/">Home</a></li>
			<li class="col-xs-2 col-sm-1"><a href="{{ action("PagesController@getAbout") }}">About</a></li>
			<li class="col-xs-2 col-sm-1"><a href="{{ action("PhotoController@gallery") }}">Gallery</a></li>
			<li class="col-xs-2 col-sm-1"><a href="{{ action("PagesController@getContact") }}">Contact</a></li>
		</ul>
		<!-- </div> -->
	</div>
	<div id="footer-description" class="hidden">
		<p>
			Grahaya adalah panti asuhan berlokasi di Jl. Pasopati, Tamanan, Banguntapan, Kauman, Tamanan, Bantul, Daerah Istimewa Yogyakarta 55191.
			Dengan niatan untuk mengamalkan surat Al-Maun sekaligus membuka jalan/peluang bersama untuk beramal soleh sesuai konsep penciptaan manusia sebagai "rahmatan lil alamin".
		</p>
	</div>
	<div class="copyright text-center">
		<p>© 2018 Grahaya. All Rights Reserved.</p>
	</div>
	@if (Auth::check())
		<div class="text-center">
			<a href="{{ action("UsersController@getLogout") }}">Logout</a>
		</div>
	@endif
</footer>

