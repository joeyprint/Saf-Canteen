<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('billId');
            $table->integer('stfId')->unsigned();
            $table->integer('orderId')->unsigned();
            $table->integer('custId')->unsigned();
            $table->timestamps();

            $table->foreign('stfId')->references('stfId')->on('staffs');
            $table->foreign('orderId')->references('orderId')->on('orders');
            $table->foreign('custId')->references('custId')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
