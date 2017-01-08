<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<title>西洋占星術師用ホロスコープ作成ソフト「microcosm」</title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="/css/pure/side-menu.css">
<script typee="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.7.0/highlight.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
</head>
<body>
    <div id="layout">
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon -->
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu">
                <a class="pure-menu-heading" href="{{ url('/') }}">microcosm</a>

                <ul class="pure-menu-list" data-bind="foreach: categoryList">
                    <li class="pure-menu-item"><a class="pure-menu-link" data-bind="text: jp_name, attr: {href: link, onclick: onclick}"></a></li>
                </ul>
            </div>
        </div>

        <div id="main">
            <div class="header">
                <h1 data-bind="text: mainMenu"></h1>
                <h2 data-bind="text: subMenu"></h2>
            </div>

            <div class="content">
                @yield('body')
            </div>
        </div>
    </div>
<script src="/js/pure/ui.js"></script>
<script type="text/javascript">
    var helpViewModel = {
        mainMenu: ko.observable(),
        subMenu: ko.observable(),
        categoryList: ko.observableArray()
    };
    ko.applyBindings(helpViewModel);

    var current = 1;
    $.ajax({
        type: "GET",
        url: "/api/help/page/" + current,
        dataType: "json",
    }).success(function(data, textStatus, xhr) {
        helpViewModel.mainMenu(data['mainMenu']);
        helpViewModel.subMenu(data['subMenu']);
    }); 

    $.ajax({
        type: "GET",
        url: "/api/help/sidenav/" + current,
        dataType: "json"
    }).success(function(data, textStatus, xhr) {
        helpViewModel.categoryList(data['categoryList']);
    }); 

    function pageChange(current) {
        $.ajax({
            type: "GET",
            url: "/api/help/page/" + current,
            dataType: "json",
        }).success(function(data, textStatus, xhr) {
            helpViewModel.mainMenu(data['mainMenu']);
            helpViewModel.subMenu(data['subMenu']);
        });
    }
</script>
</body>
</html>

