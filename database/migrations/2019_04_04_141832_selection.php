<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Selection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selection', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('match_id');
    $table->foreign('match_id')->references('id')->on('match');

                
});
        Schema::table('selection', function(Blueprint $table) {
            $table->unsignedInteger('player_id');
            $table->foreign('player_id')->references('id')->on('player');
            
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selection');
    }
}
