@extends('layouts.master', ['title'	 => 'Contact'])

@section('content')
<div class="row"></div>
	<div id="contact-details" class="col-xs-12 col-sm-4 pull-right">
        <h2>Grahaya</h2>
        <ul class="list-unstyled">
        	<li>Jl. Monumen Perjuangan, Tamanan</li>
        	<li>Banguntapan, Bantul</li>
        	<li>D.I. Yogyakarta 55191</li>
        </ul>
		<p><strong>Telp</strong>: 0812-7113-285<br>
			<strong>Mail</strong>: <a href="mailto:grahaya@gmail.com">grahaya@gmail.com</a></p>          
	</div>
	<div id="contact-map" class="col-xs-12 col-sm-8">
		<div id="googleMap" class="fluid-container" style="height:380px;">
			<div id="" style="width:500px;height:380px;"></div>
		</div>
	</div>
</div>
@stop