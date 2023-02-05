<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @if(config('view.mode') === 'vite')
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    @endif

    @if(config('view.mode') === 'webmix')
        <script src="{{ asset('/storage/js/app.js') }}" defer></script>
        <link href="{{ asset('/storage/styles/appCombine.css') }}" rel="stylesheet">
    @endif

    @stack('include-scripts')

    <script>
        $(function () {
            @stack('child-scripts')
        });
    </script>

    <style>
        @stack('child-css')
    </style>

</head>
