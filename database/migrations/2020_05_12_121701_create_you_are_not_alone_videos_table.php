<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYouAreNotAloneVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('you_are_not_alone_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('video_by');
            $table->string('video_from_location');
            $table->string('short_detail');
            $table->string('video_image');
            $table->string('play_video_text');
            $table->string('youtube_video_link');
            $table->string('module_status');
            $table->integer('store_id');
            $table->integer('created_by');
            $table->integer('updated_by');
            
            $table->softDeletes();
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
        Schema::dropIfExists('you_are_not_alone_videos');
    }
}
