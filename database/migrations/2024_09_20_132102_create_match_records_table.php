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
        Schema::create('match_records', function (Blueprint $table) {
            $table->id();
            $table->dateTime('match_date');
            $table->string('title');
            $table->string('map_name');
            $table->string('player1_id');
            $table->string('player1_race_id');
            $table->string('player2_id');
            $table->string('player2_race_id');
            $table->string('player3_id');
            $table->string('player3_race_id');
            $table->string('player4_id');
            $table->string('player4_race_id');
            $table->string('player5_id');
            $table->string('player5_race_id');
            $table->string('player6_id');
            $table->string('player6_race_id');
            $table->integer('team1_score');
            $table->integer('team2_score');
            $table->integer('winning_team');
            $table->integer('win_score');
            $table->integer('lose_score');
            $table->string('file_name');
            $table->unsignedBigInteger('writer_id');
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
        Schema::dropIfExists('match_records');
    }
};
