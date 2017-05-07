<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use \App\Repository\BlueRepository;
use \App\Services\DiaryService;

class DiaryController extends \App\Http\Controllers\Controller
{
    public $diary;
    public $dir;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DiaryService $diary)
    {
        $this->diary = $diary;
        $this->dir = '/share/diary';
    }

    public function get($dir) {
        return ['txt' => \File::files($dir)];
    }

    public function files() {
        $diaries = $diary->getDiaryList();
        return ['files' => $diaries];
    }
}
