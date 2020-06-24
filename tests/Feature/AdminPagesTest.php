<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminPagesTest extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminPage() {
        $this->actingAs(TestCase::getUser())->get('/admin')
        ->assertStatus(200)->assertSee('Get Admin Page');
    }

    public function testUserPage() {
        $this->actingAs(TestCase::getUser())->get('/admin/user')
        ->assertStatus(200)->assertSee('Get User Page');
    }

    public function testDeleteUser() {
        $this->actingAs(TestCase::getUser())->post('/admin/user/delete')
        ->assertStatus(200)->assertSee('Delete User');
    }
}
