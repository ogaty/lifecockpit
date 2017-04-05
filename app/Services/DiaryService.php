<?php

namespace App\Services;

class DiaryService {

    public function __construct() {
    }

    public function getDiaryList() {
        $diaries = \File::files('/share/diary');
        $diaries = array_map(function($key) {
            return basename($key);
        }, $diaries);
        return $diaries;
    }
}

