<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Favicon -->
        <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        
        <!-- Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <!-- Soft UI Design System -->
        <link type="text/css" href="/assets/css/soft-design-system.min.css" rel="stylesheet">
        <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">
        
        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    </head>
    <body class="font-sans antialiased bg-light">
        <!--   Core JS Files   -->
        <script crossorigin src="/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script crossorigin src="/assets/js/core/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script crossorigin src="/assets/js/soft-design-system.min.js" type="text/javascript"></script>

        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
