<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountreisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countreis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_name_ar')->nullable();
            $table->string('country_name_en')->nullable();
            $table->string('mob')->nullable();
            $table->string('code')->nullable();
            $table->string('logo')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('countreis');
    }
}