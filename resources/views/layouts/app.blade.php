<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Karthik Girraju CV') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ mix('js/manifest.js') }}"></script>--}}
    {{--<script src="{{ mix('js/vendor.js') }}" defer></script>--}}
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <div id="sticker"></div>

    <div class="container-fluid">
        <div id="wrapper">
            @yield('content')
        </div>
    </div>

</div>

@if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">
        //<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.7'><\/script>".replace(
            "HOST", location.hostname));
        //]]>
    </script>
@endif

</body>

</html>
