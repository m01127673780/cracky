<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dep_name_ar');
            $table->string('dep_name_en');            
            $table->string('description_ar')->nullable();            
            $table->string('description_en')->nullable();            
            $table->string('keyword_en')->nullable();
            $table->string('keyword_ar')->nullable();
            $table->string('icon')->nullable();
            $table->integer('parent')->unsigned()->nullable();
            $table->foreign('parent')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('departments');
    }
}
