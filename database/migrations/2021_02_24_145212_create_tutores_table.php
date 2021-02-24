<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("empresa", 40);
            $table->enum("tipo_doc", ["nif", "nie", "pasaporte"]);
            $table->string("dni", 9);
            $table->string("nombre", 30);
            $table->string("primer_apellido", 30);
            $table->string("segundo_apellido", 30)->nullable();
            $table->string("pais_dni", 15);
            $table->string("provincia", 20)->nullable();
            $table->string("municipio", 20)->nullable();
            $table->enum("estado", ["activo", "inactivo"]);
            $table->string("telefono", 9);
            $table->string("email", 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}
