<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class GasPagesTest extends TestCase
{ 
    use RefreshDatabase;
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
        $user = factory(User::class)->make();
        $view = $this->actingAs($user)->get('user/gasMileage/');
        $view->assertStatus(200)->assertSee("Get Gas Mileage");
    }
    
    public function testGetGasEdit() {
        $user = factory(User::class)->make();
        $view = $this->actingAs($user)->get('user/gasMileage/edit');
        $view->assertStatus(200)->assertSee("Get Gas Edit");
    }

    public function testPostGasEdit() {
        $user = factory(User::class)->make();
        $view = $this->actingAs($user)->post('user/gasMileage/edit');
        $view->assertStatus(200)->assertSee("Post Gas Edit");
    }

    public function testPostGasDelete() {
        $user = factory(User::class)->make();
        $view = $this->actingAs($user)->post('user/gasMileage/delete');
        $view->assertStatus(200)->assertSee("Post Gas Delete");
    }
}
