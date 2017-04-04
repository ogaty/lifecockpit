<?php

namespace App\Services;

class LtService {

    public function __construct() {
    }

    public function addLt($txt) {
        if (!\App::environment('testing')) {
            system("echo '" . $txt . "\n" . "' >> /share/zzz.txt");
            return 0;
        } else {
            system("echo '" . $txt . "\n" . "' >> /share/zzz_test.txt");
            return 0;
        }
    }
}

