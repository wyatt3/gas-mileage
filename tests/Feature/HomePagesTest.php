<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePage() {
        $this->get('/')->assertViewIs('other.home');
    }

    public function testAboutPage() {
        $this->get('about/')->assertViewIs('other.about');
    }
}
