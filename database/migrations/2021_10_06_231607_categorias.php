<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categorias', function (Blueprint $table) {
            /**
             * InnoDB nos va a permitir eliminar en cascada. Por ejemplo cuando eliminamos Drama
             * de la tabla categorias, se eliminarán todos los libros que tengan una relación
             * con la categoria Drama
             */
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre');
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
