@extends('base')

@section('sidenav')
    @if (Auth::guest())
        <li class="menu-item"><a href="{{ url('/login') }}" class="pure-menu-link">Login</a></li>
        <li class="menu-item"><a href="{{ url('/register') }}" class="pure-menu-link">Register</a></li>
    @else
        <li class="menu-item">
            <a href="{{ url('/diary') }}" class="menu-link">Diary.txt</a>
        </li>
        <li class="menu-item">
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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
