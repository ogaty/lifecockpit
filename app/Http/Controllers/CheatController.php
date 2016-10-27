<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\CheatRepository;
use Illuminate\Support\Facades\Auth;

class CheatController extends Controller
{
    private $cheat = null;

    public function __construct(CheatRepository $cheat) {
        $this->cheat = $cheat;
        $this->middleware('auth');
    }

    public function index() {
        $list = $this->cheat->all();
        return view('cheat/index',
            [
                'title' => 'cheat',
                'pagetitle' => 'cheat',
                'list' => $list
            ]
        );
    }

    public function show($id) {
        return view('cheat/show',
            [
                'title' => 'cheat',
                'pagetitle' => 'cheat',
                'id' => $id
            ]
        );
    }

    public function create() {
        return view('cheat/create',
            [
                'title' => 'cheat',
                'pagetitle' => 'cheat',
            ]
        );
    }

    public function store() {
        return redirect('cheat');
    }

    public function edit($id) {
        return view('cheat/edit',
            [
                'title' => 'cheat',
                'pagetitle' => 'cheat',
            ]
        );
    }

    public function update($id) {
        return view('cheat/update',
            [
                'title' => 'cheat',
                'pagetitle' => 'cheat',
            ]
        );
    }

    public function destroy($id) {
        return view('cheat/destroy',
            [
                'title' => 'cheat',
                'pagetitle' => 'cheat',
            ]
        );
    }

}
