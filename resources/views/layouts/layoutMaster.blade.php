<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('styles')
    @laravelPWA
</head>
<body class="antialiased">
    @yield('content')
    @yield('scripts')
    <script src="{{asset("/js/scripts/feather.min.js")}}"></script>
    <script>feather.replace()</script>
</body>
</html>
