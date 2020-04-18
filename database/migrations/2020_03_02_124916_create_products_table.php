<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name_ar');
            $table->string('product_name_en');            
            $table->string('description_ar')->nullable();            
            $table->string('description_en')->nullable();
            $table->string('add_by_ar')->nullable();            
            $table->string('add_by_en')->nullable();
            $table->string('add_by_photo')->nullable();
            $table->string('discount')->nullable();
            $table->decimal('price_offer',5,2)->default(0);
            $table->decimal('price_old',5,2)->default(0);
            $table->decimal('price',5,2)->default(0);
            $table->string('photo')->nullable();
            $table->integer('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
