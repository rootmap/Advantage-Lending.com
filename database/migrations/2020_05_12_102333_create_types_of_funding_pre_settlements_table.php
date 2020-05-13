<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesOfFundingPreSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types_of_funding_pre_settlements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('detail');
            $table->string('icon_image_one');
            $table->string('icon_one_heading');
            $table->string('icon_image_two');
            $table->string('icon_two_heading');
            $table->string('icon_image_three');
            $table->string('icon_three_heading');
            $table->string('button_text');
            $table->string('button_url');
            $table->string('background_forecolor');
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
        Schema::dropIfExists('types_of_funding_pre_settlements');
    }
}
