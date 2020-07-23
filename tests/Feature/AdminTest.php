<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /*
    * Test for admin dashboards
    */
    public function testForAdminDashboard()
    {
        $response = $this->get('/admin');

        $repsonse->assertStatus(200);
    }
}
