<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<title>{{{$title or 'LifeCockpit'}}}</title>
<link rel="stylesheet" type="text/css" href="/css/lc.css">
@yield('css')
<script typee="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.7.0/highlight.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
@yield('js')
</head>
<body>
    <div id="layout">
        <div id="menu">
            <ul class="menu-list">
                <li class="pure-menu-item">
                    <a href="{{ url('/diary') }}" class="menu-link">Diary.txt</a>
                    <a href="{{ url('/notes') }}" class="menu-link">Notes</a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/logout') }}" class="menu-link"
                             onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>

        <div id="main">
            <div id="header">
                <div class="hamburger"></div>
                <div class="title">{{{$title or 'LifeCockpit'}}</div>
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
</body>
</html>

