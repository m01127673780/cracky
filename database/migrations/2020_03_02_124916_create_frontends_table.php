<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('img_larg')->nullable();
            $table->string('img_insid')->nullable();
            $table->string('section_three_img_one')->nullable();
            $table->string('section_three_img_two')->nullable();
            $table->string('section_three_img_three')->nullable();
            $table->string('section_tow_img_one')->nullable();
            $table->string('section_tow_img_two')->nullable();
            $table->longText('section_footer_about_ar')->nullable();
            $table->longText('section_footer_about_en')->nullable();
            $table->string('section_footer_img_about')->nullable();
            $table->string('section_footer_img_payment_methods')->nullable();
            $table->string('section_footer_address_ar')->nullable();
            $table->string('section_footer_address_en')->nullable();
            $table->string('section_footer_phone')->nullable();
            $table->string('section_footer_email')->nullable();
            $table->string('section_footer_sen_message')->nullable();
            $table->string('section_footer_sen_email')->nullable();
            $table->string('section_footer_payment_methods')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('gmail')->nullable();
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
        Schema::dropIfExists('frontends');
    }
}
