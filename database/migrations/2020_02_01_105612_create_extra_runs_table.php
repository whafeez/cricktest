<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_runs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('match_id');
            $table->integer('over_id');
            $table->integer('ball_id');
            $table->unsignedBigInteger('extra_type_id');
            $table->integer('extra_runs');
            $table->integer('inning_no');
            $table->timestamps();
            $table->foreign('extra_type_id')->references('id')
                  ->on('extra_score_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_runs');
    }
}
