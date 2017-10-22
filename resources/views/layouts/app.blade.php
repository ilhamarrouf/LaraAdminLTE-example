@extends('layouts.base')

@section('class-body', 'hold-transition skin-blue sidebar-mini')

@section('layout')
<div class="wrapper">
  {{-- Sidebasr --}}
  @include('layouts.partials.nav')

  {{-- Sidebasr --}}
  @include('layouts.partials.sidebar')

  <div class="content-wrapper">
    <section class="content-header">
      {{-- Content Header --}}
      @yield('content-header')
    </section>

    <section class="content">
      {{-- Main Content --}}
      @yield('content')
    </section>
  </div>

  {{-- Footer --}}
  @include('layouts.partials.footer')
</div>
@endsection