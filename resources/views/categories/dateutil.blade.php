@extends('base')

@section('css')
        <style>
        div.dateconv {
            padding: 2px;
        }
        </style>
@stop

@section('js')
        <script type="text/javascript">
$(function() {
    $("#down").on('click', function() {
        var date = new Date( $("#unixtime").val() * 1000 );
        $("#year").val(date.getFullYear());
        $("#month").val(date.getMonth() + 1);
        $("#day").val(date.getDate());
        $("#hour").val(date.getHours());
        $("#min").val(date.getMinutes());
        $("#sec").val(date.getSeconds());
    });

    $("#up").on('click', function() {
        var date = new Date( $("#year").val(), $("#month").val() - 1, $("#day").val(), $("#hour").val(), $("#min").val(), $("#sec").val());
        $("#unixtime").val(Math.round( date.getTime() / 1000 ));
    });

    $("#prev").on('click', function() {
        var date = new Date( $("#year").val(), $("#month").val() - 1, $("#day").val() - 1, $("#hour").val(), $("#min").val(), $("#sec").val());
        $("#unixtime").val(Math.round( date.getTime() / 1000 ));
    });

    $("#prev").on('click', function() {
        var date = new Date( $("#year").val(), $("#month").val() - 1, +$("#day").val() - 1, $("#hour").val(), $("#min").val(), $("#sec").val());
        $("#unixtime").val(Math.round( date.getTime() / 1000 ));
        $("#year").val(date.getFullYear());
        $("#month").val(date.getMonth() + 1);
        $("#day").val(date.getDate());
        $("#hour").val(date.getHours());
        $("#min").val(date.getMinutes());
        $("#sec").val(date.getSeconds());
    });

    $("#next").on('click', function() {
        var date = new Date( $("#year").val(), $("#month").val() - 1, +$("#day").val() + 1, $("#hour").val(), $("#min").val(), $("#sec").val());
        $("#unixtime").val(Math.round( date.getTime() / 1000 ));
        $("#year").val(date.getFullYear());
        $("#month").val(date.getMonth() + 1);
        $("#day").val(date.getDate());
        $("#hour").val(date.getHours());
        $("#min").val(date.getMinutes());
        $("#sec").val(date.getSeconds());
    });

    $("#current").on('click', function() {
        var date = new Date();
        $("#unixtime").val(Math.round( date.getTime() / 1000 ));
        $("#year").val(date.getFullYear());
        $("#month").val(date.getMonth() + 1);
        $("#day").val(date.getDate());
        $("#hour").val(date.getHours());
        $("#min").val(date.getMinutes());
        $("#sec").val(date.getSeconds());
    });

    $("#down8h").on('click', function() {
        var unixtime = +$("#from_time8h").val();
        var totime = unixtime / 3600;
        $("#to_time8h").val(totime);
    });

});
        </script>
@stop

@section('body')
    <div class="dateconv">
        <button id="current">現在</button>
    </div>
    <div class="dateconv">
        <input type="text" id="unixtime">(秒)
    </div>
    <div class="dateconv">
        <button id="down">↓</button>
        <button id="up">↑</button>
    </div>
    <div class="dateconv">
        <input type="text" id="year" maxlength="4" size="4">/<input type="text" id="month" maxlength="2" size="2">/<input type="text" id="day" maxlength="2" size="2">
        <input type="text" id="hour" maxlength="2" size="2">:<input type="text" id="min" maxlength="2" size="2">:<input type="text" id="sec" maxlength="2" size="2">
    </div>
    <div class="dateconv">
        <button id="prev">前日</button>
        <button id="next">翌日</button>
    </div>

    <hr>

    <div class="dateconv">
        <input type="text" id="from_time8h">(秒)
    </div>
    <div class="dateconv">
        <button id="down8h">↓</button>
    </div>
    <div class="dateconv">
        <input type="text" id="to_time8h">(時間)
    </div>

    <hr>
<?php
    echo $_SERVER['HTTP_USER_AGENT'];
?>
@stop

