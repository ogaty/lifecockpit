@extends('base')

@section('css')
@stop

@section('js')
@stop

@section('body')
create
<form action="/cheat" method="post">
{{ csrf_field() }}
<input type="submit" value="決定">
</form>
<p>
<a href="/cheat">戻る</a>
</p>
@stop
