<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->longText('POST_TITLE')->nullabe;
            $table->longText('POST_CONTENT')->nullable;  
            $table->string('POST_AUTHOR_NAME')->nullable;
            $table->string('POST_ORIGIN')->nullable;
            $table->string('POST_TYPE_ID')->nullable;
            $table->longText('POST_IMAGE')->nullable;
            $table->unsignedInteger('POST_VIEW')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
