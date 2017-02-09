@extends('base')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Diaries</div>

                <div class="panel-body">
                @foreach ($diaries as $diary)
                    {{ $diary }}<br>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
