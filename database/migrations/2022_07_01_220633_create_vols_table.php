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
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->integer('nbre_plc_classA');
            $table->integer('nbre_plc_classB');
            $table->integer('prixA');
            $table->integer('prixB');
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
        Schema::dropIfExists('vols');
    }
};
