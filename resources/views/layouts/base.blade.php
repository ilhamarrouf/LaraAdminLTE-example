<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    {{-- Styles --}}
    @include('layouts.partials.style')
</head>
<body class="@yield('class-body')">
    {{-- Template --}}
    @yield('layout')

    {{-- Scripts --}}
    @include('layouts.partials.script')
</body>
</html>