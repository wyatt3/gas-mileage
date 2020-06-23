<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'name' => 'User 1',
            'email' => 'test@test.com',
            'password' => '$2y$10$CL4Vdn.Ex/X7xDDzOpDaEOeSIpBAkIyiVbE4W37NYXNEvArFWC2US' //123456
        ]);
        $user->save();
            $user = new \App\User([
            'name' => 'Wyatt Johnson',
            'email' => 'wyatt.j1834@gmail.com',
            'password' => '$2y$10$CL4Vdn.Ex/X7xDDzOpDaEOeSIpBAkIyiVbE4W37NYXNEvArFWC2US' //123456
        ]);
        $user->save();
    }
}
