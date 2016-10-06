@extends('base')

@section('css')
@stop

@section('js')
@stop

@section('body')
<h2>Dateライブラリ</h2>
Carbonをベースとしたライブラリ

<h3>URL</h3>
https://github.com/jenssegers/date

<h3>インストール</h3>
composer require jenssegers/date

<h3>使い方</h3>
<pre>
Date::setLocale('ja');
echo Date::now()->format('Y/m/d H:i:s');
</pre>
<h4>今</h4>
<pre>
Date::now()
</pre>
<h4>今日</h4>
<pre>
Date::today()
</pre>
<h4>今月末</h4>
<pre>
Date::now()->endOfMonth()
</pre>

@stop

