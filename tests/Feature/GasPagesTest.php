<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GasPagesTest extends TestCase
{ 
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()  ALWAYS START TEST FUNCTIONS WITHT THE WORD "test"!!!
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    
    public function testGetGas() {
        $user = factory(\App\User::class)->make();
        $this->actingAs($user)->get('user/gasMileage/')->assertStatus(200);
    }
    
    public function testGetGasEdit() {
        $user = factory(\App\User::class)->make();
        $this->actingAs($user)->get('user/gasMileage/edit')->assertStatus(200);
    }
}
