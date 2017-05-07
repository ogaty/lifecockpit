<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Services\DiaryService;

class DiaryServiceTest extends \TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNormal()
    {
        $dir = './diary';
        if (\File::exists($dir)) {
            \File::deleteDirectory($dir);
        }
        \File::makeDirectory($dir);
        \File::put('./diary/test1.txt', 'test1');
        \File::put('./diary/test2.txt', 'test2');
        $diary = new DiaryService();
        $diary->dir = $dir;
        try {
            $list = $diary->getDiaryList();
        } catch (\Exception $e) {
            $this->fail('exception');
        }
        \File::deleteDirectory($dir);

        $this->assertTrue(is_array($list));
        $this->assertEquals('test1.txt', $list[0]);
        $this->assertEquals('test2.txt', $list[1]);
    }

    public function testException()
    {
        try {
            $diary = new DiaryService();
            $list = $diary->getDiaryList();
            $this->fail('no exception');
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }
}
