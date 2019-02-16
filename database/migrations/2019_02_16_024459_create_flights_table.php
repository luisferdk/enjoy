<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string("origen");
            $table->string("destino");
            $table->date("fecha");
            $table->integer("pasajeros");
            $table->string("avion");
            $table->string("tiempo");
            $table->string("capacidad");
            $table->float("precio");
            $table->integer('estado')->unsigned()->default(1);
            $table->integer("reservation_id")->unsigned();
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
        Schema::dropIfExists('flights');
    }
}
