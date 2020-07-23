<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
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
        $this->withoutMiddleware(\App\Http\Middleware\Admin::class);
        // $this->withoutMiddleware(\App\Http\Middleware\Authenticate::class);
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

    /*
    * Test for admin dashboards
    */
    public function testForAdminDashboard()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }
}
