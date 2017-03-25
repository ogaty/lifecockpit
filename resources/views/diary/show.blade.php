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
                @if ($astro)
                <a href="{{ route('devdiary') }}">戻る</a>
                @else
                <a href="{{ route('diary') }}">戻る</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
