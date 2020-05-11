<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedAnAttorneiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('need_an_attorneies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('case_type');
            $table->string('case_type_name');
            $table->integer('state_case');
            $table->string('state_case_name');
            $table->string('phone');
            $table->string('email');
            $table->string('message');
            $table->string('request_status');
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
        Schema::dropIfExists('need_an_attorneies');
    }
}
