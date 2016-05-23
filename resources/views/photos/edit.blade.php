@extends('layouts.master', ['title'	 => $photo->name])

@section('content')

<h1>Edit {{$photo->name}} </h1>
<!-- <p class="lead">Edit this photo below. <a href="{{ route('photos.index') }}">Go back to all photos.</a></p> -->
<hr>
{{ Form::model($photo, [
    'method' => 'PATCH',
    'route' => ['photos.update', $photo->id],
    'files' => true
]) }}

<div class="form-group">
	{{ Form::label('name', 'Name:', ['class' => 'sr-only']) }}
	{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
</div>
<div class="form-group">
	{{ Form::label('desc', 'Description:', ['class' => 'sr-only']) }}
	{{ Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'Description']) }}
</div>
<div class="form-group">
	{{ Form::label('image', 'Image:', ['class' => 'sr-only']) }}
	<div class="input-group">
		<span class="input-group-addon">Image</span>
    	{{ Form::file('image', ['class' => 'form-control']) }}
    </div>
</div>

{{ Form::submit('Update photo', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}

@stop