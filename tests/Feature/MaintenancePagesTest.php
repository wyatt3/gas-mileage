<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class MaintenancePagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetMaintenance() {
        $user = factory(User::class)->make();
        $this->actingAs($user)->get('maintenance/')
            ->assertSee('Get Maintenance');  
    }
    public function testGetMaintenanceEdit() {
        $user = factory(User::class)->make();
        $this->actingAs($user)->get('maintenance/edit')
            ->assertSee('Get Maintenance Edit');
    }
    public function testPostMaintenanceEdit() {
        $user = factory(User::class)->make();
        $this->actingAs($user)->post('maintenance/edit')
            ->assertSee('Post Maintenance Edit');
    }
    public function testPostMaintenanceDelete() {
        $user = factory(User::class)->make();
        $this->actingAs($user)->post('maintenance/delete')
            ->assertSee('Post Maintenance Delete'); 
    }
}
