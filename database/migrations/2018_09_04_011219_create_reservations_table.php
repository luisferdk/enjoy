<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reservation_id')->nullable();
            $table->string("nombre");
            $table->string("apellido");
            $table->string("correo");
            $table->string("telefono")->nullable();
            $table->mediumText("comentarios")->nullable();
            $table->float("precio");
            $table->string('id_pago',30)->nullable();
            $table->string("hotel")->nullable();
            $table->integer('estado')->unsigned()->default(0);
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
        Schema::dropIfExists('reservations');
    }
}
