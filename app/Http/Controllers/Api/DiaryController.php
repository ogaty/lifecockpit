<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use \App\Repository\BlueRepository;
use \App\Services\DiaryService;

class DiaryController extends \App\Http\Controllers\Controller
{
    public $diary;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DiaryService $diary)
    {
        $this->diary = $diary;
    }

    public function get($file) {

        return ['txt' => $file];
    }
}
