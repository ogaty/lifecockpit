<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use \App\Repositories\LtRepository;
use \App\Services\LtService;

class LtController extends \App\Http\Controllers\Controller
{
    public $ltRepository;
    public $ltService;

    public function __construct(LtRepository $ltRepository, LtService $ltService) {
        $this->ltRepository = $ltRepository;
        $this->ltService = $ltService;
    }

    public function add() {
        if (!isset($_POST['key']) || $_POST['key'] != env('API_KEY')) {
            return ['error' => 1];
        }
        $error = $this->ltService->addLt($_POST['txt']);
        if ($error != 0) {
            return ['error' => $error];
        }

        return ['error' => 0];
    }
}
