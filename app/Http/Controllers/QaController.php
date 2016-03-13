<?php

namespace App\Http\Controllers;

use App\Repository\QaRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class QaController extends Controller
{
    protected $qa;

    public function __construct(QaRepository $qa) {
        $this->qa = $qa;
    }

    public function getIndex() {
    }

    public function getAll() {
        $array = $this->qa->getAll()->toArray();
        return view('json', ['json' => json_encode($array)]);
    }
}
