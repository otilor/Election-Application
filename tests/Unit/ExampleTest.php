<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Poll;

class ExampleTest extends TestCase
{
	public function testTakeOneFromTheUser()
	{
		$total_students = 4;
		$this->assertJson($total_students);
		
	}
	/**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
