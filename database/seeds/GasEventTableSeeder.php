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
        for($i = 0; $i <= 10; $i++) {
            $gas = new Gas([
                'date' => '2010-10-10',
                'trip_miles' => '100.54',
                'mileage' => '10000' . $i,
                'gallons' => 1.45 * $i ,
                'price_per_gallon' => '2.43',
                'total' => 1.25 * $i,
                'gas_mileage' => 1.5 * $i,
            ]);
            $car = Car::find(1);
            $car->gasevents()->save($gas);
        }
    }
}
