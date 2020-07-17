<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testVote()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Testing by Gabriel',
        ])->json('POST', '/vote', ['contestant_id' => 1]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'voted' => true,
            ]);
    }
}
