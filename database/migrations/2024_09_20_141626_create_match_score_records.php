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
        Schema::create('match_score_records', function (Blueprint $table) {
            $table->id();
            $table->integer('starcraft_id');
            $table->integer('all_win')->default(0);
            $table->integer('all_lose')->default(0);
            $table->integer('ppp_win')->default(0);
            $table->integer('ppp_lose')->default(0);
            $table->integer('ppt_win')->default(0);
            $table->integer('ppt_lose')->default(0);
            $table->integer('ppz_win')->default(0);
            $table->integer('ppz_lose')->default(0);
            $table->integer('ptz_win')->default(0);
            $table->integer('ptz_lose')->default(0);
            $table->integer('other_win')->default(0);
            $table->integer('other_lose')->default(0);
            $table->integer('p_win')->default(0);
            $table->integer('p_lose')->default(0);
            $table->integer('t_win')->default(0);
            $table->integer('t_lose')->default(0);
            $table->integer('z_win')->default(0);
            $table->integer('z_lose')->default(0);
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
        Schema::dropIfExists('match_score_records');
    }
};
