<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class PeriodsTest extends TestCase
{
    use RefreshDatabase;
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

    public function testLoadPage() {
        $response = $this->get('/periods');

        $response->assertStatus(200);
    }
}
