<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string("tour");
            $table->string("modalidad")->nullable();
            $table->date("fecha");
            $table->string("horario")->nullable();
            $table->string("adultos");
            $table->string("ninos")->nullable();
            $table->float("precio");
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
        Schema::dropIfExists('tours');
    }
}
