<?php

use Illuminate\Database\Seeder;
use App\MaintenanceEvent as Maint;
use App\Car;

class MaintenanceEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10; $i++) {
            $maint = new Maint([
                'date' => '2020-10-10',
                'mileage' => 100000 + $i,
                'description' => 'Maintenance Event ' . $i,
                'cost' => 0.52 * $i,
            ]);
            $car = Car::find(1);
            $car->maintenanceevents()->save($maint);
        }
    }
}
