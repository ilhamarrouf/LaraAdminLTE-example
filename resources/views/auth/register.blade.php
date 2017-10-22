@extends('layouts.base')

@section('title', 'Sign up')
@section('class-body', 'hold-transition register-page')

@section('layout')
<div class="register-box">
  <div class="register-logo">
    {{ config('app.name', 'Laravel') }}
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="{{ route('register') }}" method="POST">
      {{ csrf_field() }}

      <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('name'))
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
      </div>

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

      <div class="form-group has-feedback">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Sign up</button>
      </div>
    </form>

    <div>
      <a class="btn btn-link btn-sm btn-block" href="{{ route('login') }}">
        I already have a membership
      </a>
    </div>
  </div>
</div>
@endsection