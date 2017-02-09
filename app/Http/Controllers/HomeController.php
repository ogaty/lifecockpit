<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Home',
            'categories' => []
        ]);
    }

    public function diary()
    {
        $diaries = File::files('/home/tea/diary');
        $diaries = array_map(function($key) {
            return basename($key);
        }, $diaries);
        return view('diary', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Diary',
            'diaries' => $diaries
        ]);
    }
}
