<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedAnAtterneySettingsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('need_an_atterney_settingses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('background_image');
            $table->string('background_forecolor');
            $table->string('page_title');
            $table->string('page_description');
            $table->string('page_bottom_description');
            $table->string('page_bottom_button');
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
        Schema::dropIfExists('need_an_atterney_settingses');
    }
}
