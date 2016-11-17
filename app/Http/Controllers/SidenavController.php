<?php

namespace App\Http\Controllers;

class SidenavController extends Controller
{
    public static function sidenav()
    {
        if ($_SERVER['HTTP_HOST'] == 'lc.astrominit.com') {
            $categories = \App\Models\LcCategories::all();
        } elseif ($_SERVER['HTTP_HOST'] == 'tc.astrominit.com') {
            $categories = \App\Models\TcCategories::all();
        }
        return [
            'categories' => $categories,
        ];
    }
}
