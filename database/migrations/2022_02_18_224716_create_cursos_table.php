<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //creo la tabla cursos
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('dsc', 200);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Doy de baja la tabla
    {
        Schema::dropIfExists('cursos');
    }
}
