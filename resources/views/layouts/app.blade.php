<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }} | @yield('title')</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/png">
</head>
<body class="h-full">
<div>
    @include('partials.mobile_menu')
    @include('partials.sidebar_menu')
    <div class="lg:pl-72">
        @include('partials.header')
        @yield('content')
    </div>
</div>
<script>
    // function toggleDropdown() {
    //     let dropdown = document.querySelector('#dropdownMenu #dropdown');
    //     dropdown.classList.toggle('hidden');
    // }
    //
    // function toggleMobileMenu() {
    //     let menu = document.querySelector('#mobile-menu');
    //     menu.classList.toggle('hidden');
    // }
    function toggleElement(selector) {
        let element = document.querySelector(selector);
        if (element) {
            element.classList.toggle('hidden');
        } else {
            console.warn(`Element not found for selector: ${selector}`);
        }
    }
</script>

</body>
</html>
