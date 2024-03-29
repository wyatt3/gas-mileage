<?php

use Illuminate\Database\Seeder;
use App\Car;
Use App\User;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::find('1');
        $car = new Car([
            'user_id' => '1',
            'mileage' => '123456',
            'make' => 'Make',
            'model' => 'Model',
            'year' => '2000',
            'photo_name' => '18.jpg',
        ]);
        $user->cars()->save($car);
    }
}
