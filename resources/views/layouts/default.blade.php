<!DOCTYPE html>
<html lang="pt">
<head>
    <title>App - Name @yield('tittle')</title>
    @include('_partials.header')
    
</head>
<body class="sb-nav-fixed">
    @include('_partials.navbar')
    @include('_partials.aside')
        @yield('content')
   @include('_partials.footer')
</body>
</html>