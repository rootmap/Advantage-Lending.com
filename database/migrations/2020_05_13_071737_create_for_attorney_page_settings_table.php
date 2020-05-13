<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForAttorneyPageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('for_attorney_page_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('background_image');
            $table->string('background_forecolor');
            $table->string('page_title');
            $table->string('page_detail');
            $table->string('page_products_services_title');
            $table->string('page_settlement_funding_title');
            $table->string('form_title');
            $table->string('form_detail');
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
        Schema::dropIfExists('for_attorney_page_settings');
    }
}
