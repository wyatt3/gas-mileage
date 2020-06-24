<?php

namespace Tests;
use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    public function getUser() {
        $user = factory(User::class)->make();
        return $user;
    }
}
