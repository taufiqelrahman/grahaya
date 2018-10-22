@extends('layouts.master', ['title'	 => 'Gallery'])

@section('content')
<!-- <h4 class="text-center">Gallery</h4> -->
@if ($photos->count())
<div class="row">
	<div class="grid">
		@foreach($photos as $photo)
			<div class="grid-item">
				<!-- <div class="item col-xs-6 grid-group-item {{++$count%2 ? "pull-left" : "pull-right"}}"> -->
				<a href="{{ $photo->path }}" data-lightbox="gallery" data-title="{{ $photo->desc }}">
					<img src="{{ $photo->path }}" alt="Grahaya Panti Asuhan | {{ $photo->desc }}" class="group list-group-image img-center img-responsive">
					<!-- <h3 class="text-center">{{ $photo->name }}</h3> -->
					<!-- <p>{{ $photo->path }}</p> -->
					<div class="grid-desc">
						<p class="text-justify">{{ $photo->desc }}</p>
					</div>
					<!-- <a href="{{ route('photos.show', $photo->id) }}">view</a> -->
					<!-- <a href="{{ route('photos.edit', $photo->id) }}">edit</a> -->
				</a>
				<!-- </div> -->
			</div>
		@endforeach
	</div>
	<div class="col-xs-12 text-center">
		{{ $photos->links() }}
	</div>
</div>
@else
	    <p>I'm sorry, there are no such thing :(</p>
@endif
<!-- {{ link_to_action('PhotoController@create', 'create new') }} -->
<!-- {{ link_to_route('photos.create', 'create new') }} -->
@stop