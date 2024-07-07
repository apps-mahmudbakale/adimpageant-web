<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }} | @yield('title')</title>

    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/png">
</head>
<body class="h-full">
    @yield('content')
</body>
</html>
