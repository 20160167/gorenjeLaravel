<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProizvods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proizvods', function (Blueprint $table) {
            $table->id();
            $table->string('nazvi');
            $table->string('slika');
            $table->string('opis');
            $table->integer('cena');
            $table->string('energetski_razred');
            $table->string('boja');
            $table->string('materijal');
            $table->string('dimenzije');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proizvods');
    }
}
