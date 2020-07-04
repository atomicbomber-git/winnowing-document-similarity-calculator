<?php

namespace Tests\Unit;

use App\Support\RollingHash;
use PHPUnit\Framework\TestCase;

class RollingHashTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testMake()
    {
        $this->assertEquals(26729, RollingHash::make('hi'));
    }
}
