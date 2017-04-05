<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Carbon\Carbon;
use App\Repositories\BlueRepository;
use App\Services\CategoryService;

class HomeController extends Controller
{
    public $blue;
    public $category;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BlueRepository $blue, CategoryService $category)
    {
        $this->blue = $blue;
        $this->category = $category;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = $this->category->getCategoryList();
        if (\App::environment('local')) {
            $astro = true;
        } else {
            $astro = false;
        }
        return view('home', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Home',
            'categories' => $list,
            'astro' => $astro
        ]);
    }

    public function diary($begin = 0)
    {
        if (\App::environment('local')) {
            $astro = true;
        } else {
            $astro = false;
        }
        $diaries = File::files('/home/tea/diary');
        $diaries = array_map(function($key) {
            return basename($key);
        }, $diaries);
        return view('diary/index', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Diary',
            'diaries' => $diaries,
            'begin' => $begin,
            'astro' => $astro,
        ]);
    }

    public function show_diary($txt)
    {
        if (\App::environment('local')) {
            $astro = true;
        } else {
            $astro = false;
        }
        $diary = File::get('/home/tea/diary/' . $txt);
        $diary = str_replace("\n", '<br>', $diary);
        return view('diary/show', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Diary',
            'file' => $txt,
            'txt' => $diary,
            'astro' => $astro
        ]);
    }

    public function note()
    {
        return view('note/index', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Note',
        ]);
    }
}
