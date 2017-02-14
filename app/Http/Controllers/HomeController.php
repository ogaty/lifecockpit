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
        if ($_SERVER['SERVER_NAME'] == 'lc.astrominit.com') {
            $astro = true;
        } else {
            $astro = false;
        }
        return view('home', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Home',
            'categories' => [],
            'astro' => $astro
        ]);
    }

    public function diary()
    {
        if ($_SERVER['SERVER_NAME'] == 'lc.astrominit.com') {
            $astro = true;
        } else {
            $astro = false;
        }
        $diaries = File::files('/home/tea/diary');
        $diaries = array_map(function($key) {
            return basename($key);
        }, $diaries);
        return view('diary', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Diary',
            'diaries' => $diaries,
            'astro' => $astro
        ]);
    }

    public function show_diary($txt)
    {
        if ($_SERVER['SERVER_NAME'] == 'lc.astrominit.com') {
            $astro = true;
        } else {
            $astro = false;
        }
        $diary = File::get('/home/tea/diary/' . $txt);
        $diary = str_replace("\n", '<br>', $diary);
        return view('show_diary', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Diary',
            'file' => $txt,
            'txt' => $diary,
            'astro' => $astro
        ]);
    }
}
