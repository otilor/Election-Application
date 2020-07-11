<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PollTest extends TestCase
{  
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPolls()
    {
        $this->disableMiddlewareForAllTests();

        $response = $this->get('/polls');

        $response->assertStatus(200);
    }

    public function testPoll()
    {
        $this->disableMiddlewareForAllTests();
        $response = $this->get('/polls/{id}');


        $response->assertStatus(200);
    }
}
