<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowHomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function show_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_show_about_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
