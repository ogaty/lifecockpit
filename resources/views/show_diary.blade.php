@extends('base')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $file }}</div>

                <div class="panel-body">
                {!! $txt !!}
                </div>
                <a href="{{ route('devdiary') }}">戻る</a>
            </div>
        </div>
    </div>
</div>
@endsection
