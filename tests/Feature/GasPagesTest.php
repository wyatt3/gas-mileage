<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
        $this->actingAs(TestCase::getUser())->get('gasMileage/')
            ->assertStatus(200)->assertSee("");
    }
    
    public function testGetGasEdit() {
        $this->actingAs(TestCase::getUser())->get('gasMileage/edit')
            ->assertStatus(200)->assertSee("");
    }

    public function testPostGasEdit() {
        $this->actingAs(TestCase::getUser())->post('gasMileage/edit')
            ->assertStatus(200)->assertSee("");
    }

    public function testPostGasDelete() {
        $this->actingAs(TestCase::getUser())->post('gasMileage/delete')
            ->assertStatus(200)->assertSee("");
    }

    public function testGetGasAdd() {
        $this->actingAs(TestCase::getUser())->get('gasMileage/add');
        // ->assertStatus(200)->assertViewIs('');
    }
}
