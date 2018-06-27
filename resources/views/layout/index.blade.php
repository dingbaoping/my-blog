<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    @yield('css')
</head>
<body>
    <div class="box">
        @include('layout.header')

        <div class="content-box">
            <div class="row">
                <div class="col-md-9">@yield('content')</div>
                <div class="col-md-3">@include('layout.sidebar')</div>
            </div>
        </div>

        @include('layout.footer')
    </div>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/bootstrap-3.3.7/js/bootstrap.js"></script>
    @yield('js')
</body>
</html>
