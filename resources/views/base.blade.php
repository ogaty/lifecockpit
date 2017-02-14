<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<title>{{{$title or 'LifeCockpit'}}}</title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="/css/pure/side-menu.css">
@yield('css')
<script typee="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.7.0/highlight.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
@yield('js')
</head>
<body>
    <div id="layout">
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon -->
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu">
                <a class="pure-menu-heading" href="{{ url('/') }}">{{ config('app.name', 'LifeCockpit') }}</a>

                <ul class="pure-menu-list">
                    @if (Auth::guest())
                        <li class="pure-menu-item"><a href="{{ url('/login') }}" class="pure-menu-link">Login</a></li>
                        <li class="pure-menu-item"><a href="{{ url('/register') }}" class="pure-menu-link">Register</a></li>
                    @else
                        @if ($astro)
                        <li class="pure-menu-item">
                            <a href="{{ route('devdiary') }}" class="pure-menu-link">Diary.txt</a>
                        </li>
                        @else
                        <li class="pure-menu-item">
                            <a href="{{ route('diary') }}" class="pure-menu-link">Diary.txt</a>
                        </li>
                        @endif
                    @endif
                    <li class="pure-menu-item">
                        <a href="{{ url('/logout') }}" class="pure-menu-link"
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
        </div>

        <div id="main">
            <div class="header">
                <h1>{{{$pagetitle or 'LifeCockpit'}}}</h1>
                <h2></h2>
            </div>

            <div class="content">
                @yield('body')
            </div>
        </div>
    </div>
<script src="/js/pure/ui.js"></script>
</body>
</html>

