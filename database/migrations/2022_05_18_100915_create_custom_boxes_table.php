<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('image');
            $table->longText('product_list')->nullable();
            $table->string('price');
            $table->string('weight')->nullable();
            $table->string('youtube_link')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('feature_image')->nullable();
            $table->integer('stock')->nullable();
            $table->string('stock_in')->nullable();
            $table->string('status')->default('show');

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
        Schema::dropIfExists('custom_boxes');
    }
}
