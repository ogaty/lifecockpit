<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Services\LtService;

class LtServiceTest extends \TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $lt = new LtService();
        $lt->file = './zzz_test.txt';
        $ret = $lt->addLt('abc');
        $this->assertEquals($ret, 0);
        \File::delete('./zzz_test.txt');
    }
}
