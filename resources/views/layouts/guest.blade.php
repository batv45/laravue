<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ mix('tabler/tabler.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">

</head>
<body class="antialiased">
<div class="wrapper">
    <!-- Head -->
    <x-layouts.guest.header />
    <x-layouts.session-alerts />

    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page Content -->
            {{ $slot }}
        </div>
        <!-- Footer -->
        <x-layouts.guest.footer />
    </div>
</div>
<!-- Tabler Core -->
<script src="{{ mix('guest/scripts.js') }}"></script>
<script src="https://unpkg.com/feather-icons"></script>

<script>
    feather.replace()
</script>
</body>
</html>
