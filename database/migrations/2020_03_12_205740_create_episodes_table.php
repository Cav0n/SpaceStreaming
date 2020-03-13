<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('name');

            $table->bigInteger('season_id')->unsigned();
            $table->bigInteger('video_id')->unsigned();

            $table->foreign('season_id')
                    ->references('id')->on('seasons')
                    ->onDelete('cascade');

            $table->foreign('video_id')
                    ->references('id')->on('videos')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('episodes');
    }
}
