<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.app.inc.head')

<body>
    @include('layouts.app.inc.header')
    @yield('content')
    @include('layouts.app.inc.footer')
</body>
</html>
