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
        return view('qa.index', ['title' => 'Q&A']);
    }

    public function getShow($id) {
        return view('qa.show', ['title' => 'Q&A', 'id' => $id]);
    }

    public function getAdd() {
        return view('qa.add', ['title' => 'Q&A']);
    }

    public function getAll() {
        $array = $this->qa->getAll()->toArray();
        for ($i = 0; $i < count($array); $i++) {
            $array[$i]['url'] = 'http://lc.astrominit.com/qa/show/' . $array[$i]['id'];
        }
        $data = ['list' => $array];
        \Log::info(json_encode($data));
        return view('json', ['json' => json_encode($data)]);
    }

    public function getSingle($id) {
        $array = $this->qa->getById($id)->toArray();
        return view('json', ['json' => json_encode($array)]);
    }
}
