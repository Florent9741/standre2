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
        Schema::create('nums2s', function (Blueprint $table) {
            $table->id('id');
            $table->string('Nom',100);
            $table->string('ninterne',100);
            $table->string('nexterne',100);
            $table->string('gpinterc',100);
            $table->string('gpdiff',100);
            $table->timestamps();
            $table->softDeletes();


           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nums2s');
    }
};
