@extends('layouts.master', ['title'	 => 'Photos'])

@section('content')
@if ($photos->count())
	<div class="col-xs-12 col-sm-9">
		<div class="row list-group">
		@foreach($photos as $photo)
			<div class="item col-xs-6 col-sm-4 grid-group-item">
				<div class="thumbnail">
					<img src="{{ $photo->path }}" class="group list-group-image img-center img-responsive">
				    <h3 class="text-center">{{ $photo->name }}</h3>
				    <p>{{ $photo->path }}</p>
				    <p>{{ $photo->desc }}</p>
				    @if (Auth::check())
				    <a href="{{ route('photos.show', $photo->id) }}">view</a>
				    <a href="{{ route('photos.edit', $photo->id) }}">edit</a>
				    @else
			        @endif
				</div>
			</div>
		@endforeach
		</div>
	</div>
@else
	<!-- <div class="col-xs-12 col-sm-9"> -->
	    <p>I'm sorry, there are no such thing :(</p>
	<!-- </div> -->
@endif

<!-- {{ link_to_action('PhotoController@create', 'create new') }} -->
{{ link_to_route('photos.create', 'create new') }}
@stop