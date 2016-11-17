<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SidenavController;

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
        $sideinfo = \App\Http\Controllers\SidenavController::sidenav();
        return view('home', [
            'title' => config('app.name', 'LifeCockpit'),
            'pagetitle' => 'Home',
            'categories' => $sideinfo['categories']
        ]);
    }
}
