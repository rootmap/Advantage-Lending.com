<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInheritanceFundingFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inheritance_funding_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('city');
            $table->integer('state');
            $table->string('state_name');
            $table->string('zip_code');
            $table->string('email');
            $table->string('phone');
            $table->string('person_received_inheritance');
            $table->string('receive_inheritance_date');
            $table->string('total_amount_inheritance');
            $table->string('amount_you_need_now');
            $table->string('would_you_like_to_refer');
            $table->string('form_status');
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
        Schema::dropIfExists('inheritance_funding_forms');
    }
}
