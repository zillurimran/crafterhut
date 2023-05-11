<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('order_type')->default('livrasion');
            $table->integer('pickup_address_id')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('pickup_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('order_type');
            $table->dropColumn('pickup_address_id');
            $table->dropColumn('pickup_date');
            $table->dropColumn('pickup_time');
        });
    }
}
