
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="/css/pure/side-menu.css">

    
</head>
<body>

    <div id="layout">
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon -->
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu">
                <a class="pure-menu-heading" href="#">TechCockpit</a>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>

                    <li class="pure-menu-item">
                        <a href="#" class="pure-menu-link">Services</a>
                    </li>

                    <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
                </ul>
            </div>
        </div>

        <div id="main">
            <div class="header">
                <h1>Page Title</h1>
                <h2>A subtitle for your page goes here</h2>
            </div>

            <div class="content">
                @yield('body')
            </div>
        </div>
    </div>







<script src="/js/pure/ui.js"></script>


</body>
</html>

