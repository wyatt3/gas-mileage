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
        $user = User::find('2');
        $car = new Car([
            'user_id' => '2',
            'mileage' => '125000',
            'make' => 'Make',
            'model' => 'Model',
            'year' => '2000',
            'photo_name' => '18.jpg',
        ]);
        $user->cars()->save($car);
        $car = new Car([
            'user_id' => '2',
            'mileage' => '123456',
            'make' => 'Make2',
            'model' => 'Model2',
            'year' => '2000',
            'photo_name' => '18.jpg',
        ]);
        $user->cars()->save($car);
        $user = User::find('1');
        $car = new Car([
            'user_id' => '1',
            'mileage' => '123456',
            'make' => 'Make3',
            'model' => 'Model3',
            'year' => '2000',
            'photo_name' => '18.jpg',
        ]);
        $user->cars()->save($car);
    }
}
