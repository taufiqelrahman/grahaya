@extends('layouts.master', ['title'	 => 'Login'])

@section('content')
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            {{ Session::flash('flash_message', $error) }}
        @endforeach
    </ul>
@endif  
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="remember" value="">
        Remember Me
      </label>
    </div>
    <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
    <!-- <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div> -->
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@stop