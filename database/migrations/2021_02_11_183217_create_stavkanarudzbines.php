<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStavkanarudzbines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stavkanarudzbines', function (Blueprint $table) {
            $table->foreignId('narudzbina_id')->constrained('narudzbinas');
            $table->foreignId('proizvod_id')->constrained('proizvods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stavkanarudzbines');
    }
}
