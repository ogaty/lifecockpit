@extends('base')

@section('sidenav')
                @if (Auth::guest())
                    <li class="menu-item"><a href="{{ url('/login') }}" class="pure-menu-link">Login</a></li>
                    <li class="menu-item"><a href="{{ url('/register') }}" class="pure-menu-link">Register</a></li>
                @else
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
                @endif
@endsection

@section('body')

@endsection

