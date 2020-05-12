<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHowWeHelpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_we_helps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('section_title');
            $table->string('section_detail');
            $table->string('section_one_icon');
            $table->string('section_one_content');
            $table->string('section_two_icon');
            $table->string('section_two_content');
            $table->string('section_three_icon');
            $table->string('section_three_content');
            $table->string('section_four_icon');
            $table->string('section_four_content');
            $table->string('section_image');
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
        Schema::dropIfExists('how_we_helps');
    }
}
