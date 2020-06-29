<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MaintenancePagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetMaintenance() {
        $this->actingAs(TestCase::getUser())->get('maintenance/')
            ->assertSee('');  
    }
    public function testGetMaintenanceEdit() {
        $this->actingAs(TestCase::getUser())->get('maintenance/edit')
            ->assertSee('');
    }
    public function testPostMaintenanceEdit() {
        $this->actingAs(TestCase::getUser())->post('maintenance/edit')
            ->assertSee('');
    }
    public function testPostMaintenanceDelete() {
        $this->actingAs(TestCase::getUser())->post('maintenance/delete')
            ->assertSee(''); 
    }
}
