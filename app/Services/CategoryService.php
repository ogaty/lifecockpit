<?php

namespace App\Services;

use \App\Services\DiaryService;

class CategoryService {

    public function __construct() {
    }

    public function getCategoryList() {
        $diary = new DiaryService();
        return $diary->getDiaryList();
    }

}

