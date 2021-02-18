<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
</head>
<body>
    @include('layout.partials.navbar')
    @include('layout.partials.header')
    @yield('content')
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
</body>
</html>
