<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('/css/senya/senya.css') }}">
        <!-- Bootstrap -->
        <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
        <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
        <div id="container">
            @yield('content')
        </div>
    </body>
</html>