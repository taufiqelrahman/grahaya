@extends('layouts.master', ['title'	 => 'Contact'])

@section('content')
<div class="row"></div>
	<div id="contact-details" class="col-xs-12 col-sm-4 pull-right">
        <h2>Grahaya</h2>
        <p class="manchet"></p>
        <p>Gammelvej 2B, Gadevang<br>3400 Hilleroed<br>Denmark</p>
		<p><strong>Tel</strong>. +45 2177 0355<br><strong>Mail</strong>: <a href="mailto:info@jespergadeberg.com">info@jespergadeberg.com</a></p>            
	</div>
	<div id="contact-map" class="col-xs-12 col-sm-8">
		<div id="googleMap" class="fluid-container" style="height:380px;">
			<div id="" style="width:500px;height:380px;"></div>
		</div>
	</div>
</div>
@stop