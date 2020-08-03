<?php

use Illuminate\Database\Seeder;
use App\User;
use TCG\Voyager\Models\User as VoyagerUser;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'Wyatt',
            'email' => 'wyatt.j1834@gmail.com',
            'password' => password_hash('M1fdmv41!', PASSWORD_BCRYPT),
        ]);
        $user->save();
    }
}
