<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchFinalResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_final_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('match_id');
            $table->tinyInteger('status')->comment ='1=in progress; 2=finished; 3=delayed; 4=tie';
            $table->integer('team_won');
            $table->string('win_by')->comment('score,wicket');
            $table->string('margin')->comment('win margin by wicket or score');
            $table->timestamps();
            $table->foreign('match_id')->references('id')->on('matches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_final_results');
    }
}
