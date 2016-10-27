<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LockedController extends Controller
{
    public function dateutil() {
        return view('utils/dateutil',
            [
                'title' => 'date util',
                'pagetitle' => 'Date Util',
            ]
        );
    }

    public function opensocial() {
        return view('utils/opensocial',
            [
                'title' => 'opensocial',
                'pagetitle' => 'opensocial',
            ]
        );
    }
}
