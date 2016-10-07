@extends('base')

@section('css')
@stop

@section('js')
@stop

@section('body')
<ul>
@foreach ($list as $data)
<li>{{$data->name}}</li>
@endforeach
</ul>
<p>
<a href="/cheat/create">追加</a>
</p>
@stop
