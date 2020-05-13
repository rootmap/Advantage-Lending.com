<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForAttorneyKnownandRecognizedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('for_attorney_known_and_recognizeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('detail');
            $table->string('primary_background_color');
            $table->string('secondary_background_color');
            $table->string('video_background_image');
            $table->string('youtube_link');
            $table->string('video_by');
            $table->string('video_location');
            $table->string('video_short_detail');
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
        Schema::dropIfExists('for_attorney_known_and_recognizeds');
    }
}
