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
        Schema::create('reservations', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->unsignedBigInteger('vol');
            $table->string('classe');
            $table->foreign('vol')
            ->references('id')->on('vols');
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
        Schema::dropIfExists('reservations');
    }
};
