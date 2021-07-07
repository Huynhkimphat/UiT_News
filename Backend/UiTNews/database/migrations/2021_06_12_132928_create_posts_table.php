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
            $table->text('POST_TITLE')->nullable();
            $table->longText('POST_CONTENT')->nullable();  
            $table->string('POST_AUTHOR_NAME')->nullable();
            $table->string('POST_ORIGIN')->nullable();
            $table->integer('POST_TYPE_ID')->unsigned();
            $table->foreign('POST_TYPE_ID')->references('id')->on('types')->onDelete('cascade');
            $table->text('POST_DESCRIPT')->nullable();
            $table->string('POST_IMAGE')->nullable();
            $table->integer('POST_VIEW')->default(0);
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
