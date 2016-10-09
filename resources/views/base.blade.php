<html lang="ja">
<head>
<meta charset="UTF-8">
<title>{{{$title}}}</title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
@yield('css')
<script typee="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
@yield('js')
</head>
<body>
<div id="layout" class="pure-g">
<div class="sidebar pure-u-1 pure-u-md-1-4">
</div>
<div class="content pure-u-1 pure-u-md-3-4">
@yield('body')
</div>
</div>
</body>
</html>

