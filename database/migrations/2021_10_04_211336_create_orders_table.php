<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); 
            $table->integer('order_total'); 
            $table->longText('address');
            $table->string('name');
            $table->string('email');
            $table->longText('address_two')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->longText('delivery_note')->nullable(); 
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending'); 
            $table->enum('payment_method', ['cash on delivery', 'online transaction']); 
            $table->enum('payment_status', ['paid', 'not paid'])->default('not paid'); 
            $table->integer('total_payable');
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
        Schema::dropIfExists('orders');
    }
}
