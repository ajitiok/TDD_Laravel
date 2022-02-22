<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectionAboutPageTest extends TestCase
{
    /**
     * @ test
    */
    public function test_it_will_be_redirect()
    {
        // bisa menunjukkan lgsg errornya dengan withoutExceptionHandling()
        $this->withoutExceptionHandling();
        $this->get('/about-page')->assertRedirect('/about');
        
    }

    public function test_about_page_can_be_rendered()
    {
        $this->get('/about')->assertStatus(200);
    }
}
