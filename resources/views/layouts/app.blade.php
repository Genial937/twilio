<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS Portal</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('public/fonts/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/libs/flatpickr/dist/flatpickr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/libs/quill/dist/quill.core.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/libs/highlightjs/styles/vs2015.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css"
        integrity="sha512-PIAUVU8u1vAd0Sz1sS1bFE5F1YjGqm/scQJ+VIUJL9kNa8jtAWFUDMu5vynXPDprRRBqHrE8KKEsjA7z22J1FA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('public/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/spin.css') }}">

    <!-- Map -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />

    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{ asset('public/css/theme.min.css') }}">
</head>

<body>
    @include('layouts.sidebar')
    <div class="main-content">
        @yield('content')
    </div>
    @include('layouts.footer')
