<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('how_much_money_do_you_need');
            $table->string('what_was_the_date_of_your_accident');
            $table->integer('state_case');
            $table->string('state_case_name');
            $table->integer('case_type');
            $table->string('case_type_name');
            $table->integer('how_did_you_heard');
            $table->string('how_did_you_heard_name');
            $table->string('email');
            $table->string('phone');
            $table->string('how_should_we_contact_you');
            $table->string('street_address');
            $table->integer('state');
            $table->string('state_name');
            $table->string('zip_code');
            $table->string('attorney__first_name');
            $table->string('attorney__last_name');
            $table->string('law_firm_name');
            $table->string('law_firm_phone');
            $table->string('case_status');
            $table->string('application_status');
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
        Schema::dropIfExists('application_forms');
    }
}
