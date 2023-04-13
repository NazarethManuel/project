<!DOCTYPE html>
<html lang="pt">
<head>
    <title> @yield('title')</title>
    @include('layouts._include.dashboard.header')

</head>
<body class="sb-nav-fixed">
    @include('layouts._include.dashboard.navbar')
    @include('layouts._include.dashboard.aside')
        @yield('content')
   @include('layouts._include.dashboard.footer')
</body>
</html>
