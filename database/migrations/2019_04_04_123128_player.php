<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Player extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('prenom');
            $table->string('nom');
            $table->string('photo');
            $table->string('taille');
            $table->string('poids');
            $table->string('pied');
            $table->string('poste');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
