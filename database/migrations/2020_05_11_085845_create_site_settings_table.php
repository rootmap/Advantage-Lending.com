<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('site_title');
            $table->string('top_logo');
            $table->string('bottom_logo');
            $table->string('contact_number');
            $table->string('email');
            $table->string('top_toll_free_call_message');
            $table->string('top_apply_button_text');
            $table->string('bottom_copyright_text');
            $table->string('bottom_right_reserved_text');
            $table->string('facebook_page_link');
            $table->string('twitter_page_link');
            $table->string('linkedin_page_link');
            $table->string('youtube_page_link');
            $table->string('google_plus_page_link');
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
        Schema::dropIfExists('site_settings');
    }
}
