<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        @yield('page_title')
    </title>
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/png" href="/fav.png">
    @include('partials.analytics')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/plugins.css') }}">
    @yield('header-styles')
</head>
<body>
<main id="app" class="main container">
    @include('partials.header')
    @yield('body')
    @include('partials.footer')
</main>
<script src="{{ mix('/js/app.js') }}"></script>
@yield('footer-scripts')
</body>
</html>
