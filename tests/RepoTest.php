<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Repositories\BlueRepository;

class RepoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $blue = new BlueRepository();
        $blue->all();
        $this->assertTrue(true);
        $this->assertTrue(true);
    }
}
