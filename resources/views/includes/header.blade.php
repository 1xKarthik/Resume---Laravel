<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Scotch">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Karthik Girraju CV') }}</title>

<!-- Scripts -->
{{--<script src="{{ mix('js/manifest.js') }}"></script>--}}
{{--<script src="{{ mix('js/vendor.js') }}" defer></script>--}}
<script src="{{ mix('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ mix('css/app.css') }}" rel="stylesheet">