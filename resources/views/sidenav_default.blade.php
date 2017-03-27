    @if (Auth::guest())
        <li class="menu-item"><a href="{{ url('/login') }}" class="pure-menu-link">Login</a></li>
        <li class="menu-item"><a href="{{ url('/register') }}" class="pure-menu-link">Register</a></li>
    @else
        <li class="menu-item" id="diary">
            <a href="#diary" class="menu-link" v-on:click="diary_list">Diary.txt</a>
        </li>
        <li class="menu-item">
            <a href="{{ url('/notes') }}" class="menu-link" v-on:click="notes_list">Notes</a>
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

