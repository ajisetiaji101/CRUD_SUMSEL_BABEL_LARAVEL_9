<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.header')
    <body class="antialiased">
        @yield('container')
    </body>
</html>
