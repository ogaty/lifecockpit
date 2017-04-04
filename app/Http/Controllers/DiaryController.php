<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repository\BlueRepository;
use App\Service\DiaryService;

class DiaryController extends Controller
{
    public $blue;
    public $diary;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BlueRepository $blue, DiaryService $diary)
    {
        $this->blue = $blue;
        $this->diary = $diary;
        $this->middleware('auth');
    }

}
