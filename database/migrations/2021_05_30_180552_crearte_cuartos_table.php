<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearteCuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuartos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->integer('precio');
            $table->string('ciudad');
            $table->string('zona')->nullable();
            $table->string('calle');
            $table->integer('numero')->nullable();
            $table->integer('cuartos');
            $table->integer('banio');
            $table->text('descripcion');
            $table->string('fotos');
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
        //
    }
}
