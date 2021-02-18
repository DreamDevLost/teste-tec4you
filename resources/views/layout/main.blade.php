<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
</head>
<body>
    @include('layout.partials.navbar')
    @include('layout.partials.header')
    <div class="p-3 d-block">
        @yield('content')
    </div>`
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
</body>
</html>
