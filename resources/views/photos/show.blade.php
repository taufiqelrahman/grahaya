@extends('layouts.master', ['title'	 => $photo->name])

@section('content')

<img src="{{ $photo->path }}" alt="Grahaya Panti Asuhan" class="group list-group-image img-center img-responsive">
<h3 class="text-center">{{ $photo->name }}</h3>
<p>{{ $photo->path }}</p>
<p>{{ $photo->desc }}</p>
@if (Auth::check())
    <div class="row">
        <div class="col-md-6">
			<a href="{{ route('photos.edit', $photo->id) }}">edit</a> 
        </div>
        <div class="col-md-6 text-right">
            {{ Form::open([
                'method' => 'DELETE',
                'route' => ['photos.destroy', $photo->id]
            ]) }}
                {{ Form::submit('Delete this photo?', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
        </div>
    </div>
@else
@endif

@stop