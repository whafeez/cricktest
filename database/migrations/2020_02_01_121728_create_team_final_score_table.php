<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamFinalScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_final_score', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team');
            $table->integer('score');
            $table->integer('wickets');
            $table->double('overs');
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('season_id');
            $table->foreign('match_id')->references('id')
                  ->on('matches');
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
        Schema::dropIfExists('team_final_score');
    }
}
