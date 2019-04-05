<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Goal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goal', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id');
            $table->foreign('player_id')->references('id')->on('player');

});
        Schema::table('goal', function(Blueprint $table) {
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('match');
            
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goal');
    }
}
