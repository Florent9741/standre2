<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id('id_film');
            $table->string('titre',250);
            $table->string('resume',2048);
            $table->string('image',200);
            $table->date('date');
            $table->string('realisateur',200);
            $table->string('duree');
            $table->string('casting',250);
            $table->string('affiche',250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
