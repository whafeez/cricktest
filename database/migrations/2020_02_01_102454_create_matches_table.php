<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team1');
            $table->integer('team2');
            $table->datetime('match_date');
            $table->unsignedBigInteger('season_id');
            $table->unsignedBigInteger('venue_id');
            $table->integer('toss_winner');
            $table->integer('toss_decider');
            $table->integer('match_winner');
            $table->integer('man_of_match');
            $table->foreign('season_id')->references('id')->on('seasons');
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
        Schema::dropIfExists('matches');
    }
}
