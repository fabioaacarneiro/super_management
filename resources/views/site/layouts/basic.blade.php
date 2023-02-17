<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-9">
        <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    </head>
    <body>
        @include('site.layouts._partials.header')
        @yield('content')
    </body>
</html>