<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<title>{{{$title or 'LifeCockpit'}}}</title>
 <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
<link rel="stylesheet" type="text/css" href="{{ elixir('css/lc.css') }}">
@yield('css')
<script typee="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.7.0/highlight.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
<script type="text/javascript" src="/vendor/vue/vue.min.js"></script>
@yield('js')
</head>
<body>
    <div id="layout">
        <div id="menu">
            <ul class="menu-list">
                @yield('sidenav')
            </ul>
        </div>

        <div id="main">
            <div id="header">
                <div class="hamburger"></div>
                <div class="brand">{{{$title or 'LifeCockpit'}}}</div>
                <div class="notification"></div>
            </div>

            <div id="body">
                <div class="header">
                    <h1>{{{$pagetitle or 'LifeCockpit'}}}</h1>
                    <h2></h2>
                </div>
    
                <div class="content">
                    @yield('body')
                </div>
            </div>
        </div>
    </div>
@include('viewmodel')
</body>
</html>

