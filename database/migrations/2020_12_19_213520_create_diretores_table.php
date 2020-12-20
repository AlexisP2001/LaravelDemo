<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiretoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diretores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',20);
            $table->string('direccion',30);
            $table->string('telefono',15);
            $table->unsignedBigInteger('id_departamento');
            $table->timestamps();

            $table->foreign('id_departamento')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diretores');
    }
}
