<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_policies', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('delivery_time');
            $table->string('delivery_type');
            $table->string('return_time');
            $table->string('warranty');
            $table->string('delivery_areas');
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
        Schema::dropIfExists('delivery_policies');
    }
}
