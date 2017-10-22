@extends('layouts.base')

@section('title', 'Reset Password')
@section('class-body', 'hold-transition login-page')

@section('layout')
<div class="login-box">
  <div class="login-logo">
    {{ config('app.name', 'Laravel') }}
  </div>

  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <div class="login-box-body">
    <p class="login-box-msg">Reset your password</p>

    <form action="{{ route('password.email') }}" method="POST">
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

      <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Send Password Reset Link</button>
      </div>
    </form>

    <div>
      <a class="btn btn-link btn-sm btn-block" href="{{ route('login') }}">
        Back to Sign in
      </a>
    </div>
  </div>
</div>
@endsection