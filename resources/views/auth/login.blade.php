@extends('layouts.base')

@section('title', 'Sign in')
@section('class-body', 'hold-transition login-page')

@section('layout')
<div class="login-box">
  <div class="login-logo">
    {{ config('app.name', 'Laravel') }}
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('login') }}" method="POST">
      {{ csrf_field() }}

      <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            Remember Me
          </label>
        </div>
      </div>

      <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
      </div>
    </form>

    <div>
      <a class="btn btn-link btn-sm btn-block" href="{{ route('password.request') }}">
        I forgot my password
      </a>
      <a class="btn btn-link btn-sm btn-block" href="{{ route('register') }}">
        Register a new membership
      </a>
    </div>
  </div>
</div>
@endsection