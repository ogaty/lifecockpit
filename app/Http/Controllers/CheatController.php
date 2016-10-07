<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\CheatRepository;

class CheatController extends Controller
{
    private $cheat = null;

    public function __construct(CheatRepository $cheat) {
        $this->cheat = $cheat;
    }

    public function index() {
        $list = $this->cheat->all();
        return view('cheat/index',
            [
                'title' => 'cheat',
                'list' => $list
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

    public function create() {
        return view('cheat/create',
            [
                'title' => 'cheat'
            ]
        );
    }

    public function store() {
        return redirect('cheat');
    }

    public function edit($id) {
        return view('cheat/edit',
            [
                'title' => 'cheat'
            ]
        );
    }

    public function update($id) {
        return view('cheat/update',
            [
                'title' => 'cheat'
            ]
        );
    }

    public function destroy($id) {
        return view('cheat/destroy',
            [
                'title' => 'cheat'
            ]
        );
    }

}
