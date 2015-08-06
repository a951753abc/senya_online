<html>
    <head>
        <title>{{ $title }}</title>
        <!-- Bootstrap -->
        <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
        <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
        @yield('script')
        <nav class="navbar navbar-inverse navbar-fixed-top" role=navigation>
            <div class="container">
                <div class=navbar-header>
                    <a class=navbar-brand href=#>{{ $Project_name }}</a>
                </div>
                <div id=navbar class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href=#account>帳號管理</a></li>
                        <li><a href="#">級別設定</a></li>
                        <li><a href=#about>About</a></li>
                        <li><a href=#contact>Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
