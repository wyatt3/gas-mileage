<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car = new Car([
            'user_id' => '2',
            'mileage' => '125000',
            'make' => 'Make',
            'model' => 'Model',
            'year' => '2000',
            'photo_name' => 'photo',
        ]);
        $car->save();
        $car = new Car([
            'user_id' => '2',
            'mileage' => '123456',
            'make' => 'Make2',
            'model' => 'Model2',
            'year' => '2000',
            'photo_name' => 'photo2',
        ]);
        $car->save();
    }
}
