<!DOCTYPE html>
<html lang="pt">
<head>
    <title> @yield('title','BookStore')</title>
    @include('layouts._include.site.head')

</head>

<body class="home-page home-01 ">

    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    @include('layouts._include.site.header')
    @include('layouts._include.site.navbar')
    @include('layouts._include.site.aside')
    @yield('content')
    @include('layouts._include.site.footer')
    
</body>
</html>
