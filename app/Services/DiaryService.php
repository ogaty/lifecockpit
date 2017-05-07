<?php

namespace App\Services;

class DiaryService {

    public $dir;

    public function __construct() {
    }

    public function getDiaryList() {
        if (is_null($this->dir)) {
            throw new \Exception('not set dir.');
        }
        $diaries = \File::files($this->dir);
        $diaries = array_map(function($key) {
            return basename($key);
        }, $diaries);
        return $diaries;
    }
}

