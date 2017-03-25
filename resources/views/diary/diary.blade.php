@extends('base')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Diaries</div>

                <div class="panel-body">
                    <div>
                        <button onclick="newmemo()">newmemo</button>
                    </div>
                    @for ($i = 0 + $begin; $i < 30 + $begin; $i++)
                        @if (count($diaries) > $i)
                            <a href="{{ url('/diary') }}/show/{{ $diaries[$i] }}">{{ $diaries[$i] }}</a><br>
                        @endif
                    @endfor
                    <ul data-bind="foreach: diaries">
                        <li><a data-bind="text: name, attr: {href: link}"></a></li>
                    </ul>
                    <div>
                        <button onclick="prevmemo()">prev</button>
                        <button onclick="nextmemo()">next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var diaryViewModel = {
    diaries: ko.observableArray()
};

ko.applyBindings(diaryViewModel);

function newmemo() {
    $.post({
        'url' : 'http://lc.astrominit.com/api/newmemo',
        'success' : function() {
            location.reload();
        }
    });
}
function nextmemo() {
diaryViewModel.diaries([{name: 'bbbb', link: 'http://aaa.bbb/' }]);

//    location.href = '{{ route('devdiary') }}/{{ 30 + $begin }}';
}
function prevmemo() {
@if ($begin > 30)
    location.href = '{{ url('/diary') }}/{{ $begin - 30 }}';
@else
    location.href = '{{ url('/diary') }}/';
@endif
}
</script>
@endsection
