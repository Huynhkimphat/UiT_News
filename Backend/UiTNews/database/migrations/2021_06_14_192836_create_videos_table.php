<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->longText('VIDEO_TITLE')->nullable();
            $table->longText('VIDEO_FILE')->nullable();
            $table->longText('VIDEO_DESCRIPTION')->nullable();
            $table->longText('VIDEO_AUTHOR')->nullable();
            $table->longText('VIDEO_ORIGIN')->nullable();
            $table->longText('VIDEO_TYPE')->nullable();
            $table->longText('VIDEO_VIEW')->nullable();
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
        Schema::dropIfExists('videos');
    }
}
