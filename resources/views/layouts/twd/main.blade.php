<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.twd.inc.head')

<body>
    @include('layouts.twd.inc.header')

    <x-block-about></x-block-about>




    {{--    @yield('content')--}}
    <x-footer></x-footer>
    @vite('resources/js/app.js')
</body>
</html>
