<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
        ->dontSee('Laravel 5');
        $response = $this->call('GET', 'http://lc.astrominit.com/');

        $this->assertTrue($response->status() == 200 || $response->status() == 302);
    }
}
