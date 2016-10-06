<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CheatController.php extends Controller
{
    public function index() {
        return view('cheat/index',
            [
                'title' => 'cheat'
            ]
        );
    }

    public function show($id) {
        return view('cheat/show',
            [
                'title' => 'cheat',
                'id' => $id
            ]
        );
    }
}
