<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->longText('name');
            $table->longText('short_description');
            $table->longText('sku');
            $table->integer('price');
            $table->string('image');
            $table->string('category_id');
            $table->string('subCategory_id')->nullable();
            $table->string('qty')->nullable();
            $table->enum('qty_in',['kg', 'piece'])->nullable();
            $table->string('display_as');
            $table->integer('discount')->nullable();
            $table->dateTime('discount_till')->nullable();
            $table->string('slug');
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
