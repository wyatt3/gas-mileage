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
                'trip_miles' => '100.4',
                'mileage' => '10000' . $i,
                'gallons' => .042 * $i ,
                'price_per_gallon' => '2.43',
                'total' => .05 * $i,
                'gas_mileage' => .035 * $i,
            ]);
            $car = Car::find(1);
            $car->gasevents()->save($gas);
        }
    }
}
