@extends('base')

@section('css')
@stop

@section('js')
@stop

@section('body')
<h3>ページ追加</h3>
1. php artisan make:controller AbcController<br>
2. routes/web.phpに追記<br>
Route::get('/abc', 'AbcController@index');<br>
3. Controller内では<br>
<pre>
public function index() {
    return view('index', ['title' => 'zzz']);
}
</pre>

<h3>Model</h3>
<pre>
$user = DB::table('users')->where('name', 'John')->get();
$user = DB::table('users')->where('name', 'John')->first();
</pre>

@stop

