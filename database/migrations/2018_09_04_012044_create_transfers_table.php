<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string("de");
            $table->string("para");
            $table->string("pasajeros");
            $table->string("tipo");
            $table->date("llegada_fecha")->nullable();
            $table->string("llegada_hora")->nullable();
            $table->string("llegada_aerolinea")->nullable();
            $table->string("llegada_vuelo")->nullable();

            $table->date("salida_fecha")->nullable();
            $table->string("salida_hora")->nullable();
            $table->string("salida_aerolinea")->nullable();
            $table->string("salida_vuelo")->nullable();

            $table->float("precio");
            $table->string("vip")->nullable();
            $table->string("cervezas")->nullable();
            $table->string("sodas")->nullable();
            $table->string("vino")->nullable();
            $table->string("champagne")->nullable();
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
        Schema::dropIfExists('transfers');
    }
}
