<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('orderId');
            $table->integer('custId')->unsigned();
            $table->string('orderSendAddress');
            $table->integer('stfId')->unsigned();
            $table->integer('paymentId')->unsigned();
            $table->double('orderTotal');
            $table->timestamps();

            $table->foreign('custId')->references('custId')->on('customers');
            $table->foreign('stfId')->references('stfId')->on('staffs');
            $table->foreign('paymentId')->references('paymentId')->on('payments');
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
