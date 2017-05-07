<?php

namespace App\Services;

class LtService {

    public $file;

    public function __construct() {
    }

    public function addLt($txt) {
        $ret = \File::append($this->file, $txt . "\n");
        if ($ret === false) {
            return -1;
        }
        return 0;
    }
}

