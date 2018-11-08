<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vips', function (Blueprint $table) {
            $table->increments('id');
            $table->date("llegada_fecha");
            $table->string("llegada_hora");
            $table->string("llegada_aerolinea");
            $table->string("llegada_vuelo");

            $table->date("salida_fecha");
            $table->string("salida_hora");
            $table->string("salida_aerolinea");
            $table->string("salida_vuelo");

            $table->string("pasajeros");
            $table->string("precio");
            $table->integer('estado')->unsigned()->default(1);
            $table->integer('reservation_id')->unsigned();
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
        Schema::dropIfExists('vips');
    }
}
