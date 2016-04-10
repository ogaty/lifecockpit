<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MmController extends Controller
{
    //
    public function getIndex() {
        return view('mm.index', ['title' => 'MindMap']);
    }
}
