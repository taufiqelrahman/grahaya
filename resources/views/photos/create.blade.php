@extends('layouts.master', ['title'	 => 'Add a new photo'])

@section('content')
@include('errors.error')
<h1>Add a new photo</h1>
<hr>

{{ Form::open(['route' => 'photos.store','files' => true, 'class' => '']) }}
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
	{{ Form::submit('Add New Photo', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}

@stop