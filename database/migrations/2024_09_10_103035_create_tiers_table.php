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
        Schema::create('tiers', function (Blueprint $table) {
            $table->id();
            $table->string('starcraft_name');
            $table->integer('tier');
            $table->string('starcraft_race');
            $table->integer('ladder_score')->default(1000);
            $table->timestamps();

            //배틀넷 이름
            //프,테,저 종족 -> 전적 테이블
            //
            //종족
            //래더점수

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiers');
    }
};
