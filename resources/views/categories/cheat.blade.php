@extends('base')

@section('css')
@stop

@section('js')
@stop

@section('body')
<ul>
@if (isset($liset))
@foreach ($list as $data)
<li>{{$data->name}}</li>
@endforeach
@endif
</ul>
<p>
<a href="/cheat/create">追加</a>
</p>
@stop
