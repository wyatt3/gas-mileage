<?php

use Illuminate\Database\Seeder;
use App\GasEvent as Gas;
use App\Car;

class GasEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gas = new Gas([
            'car_id' => '1',
            'date' => '2010-10-10',
            'trip_miles' => '100.4',
            'mileage' => '100000',
            'gallons' => '25.24',
            'price_per_gallon' => '2.43',
            'total' => '32.12',
            'gas_mileage' => '12.14',
        ]);
        $car = Car::find($gas->car_id);
        $car->gasevents()->save($gas);
    }
}
