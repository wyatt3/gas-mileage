<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGasEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gas_events', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id');
            $table->date('date');
            $table->double('trip_miles', 10, 1);
            $table->integer('mileage');
            $table->double('gallons', 10, 2);
            $table->double('price_per_gallon', 10, 2);
            $table->double('total', 10, 2);
            $table->double('gas_mileage', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gas_events');
    }
}
