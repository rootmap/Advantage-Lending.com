<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutPageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_page_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('section_title');
            $table->string('background_image');
            $table->string('background_forecolor');
            $table->string('page_heading_title');
            $table->string('page_sub_heading');
            $table->string('page_short_content');
            $table->string('page_options');
            $table->string('page_options_image');
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
        Schema::dropIfExists('about_page_settings');
    }
}
