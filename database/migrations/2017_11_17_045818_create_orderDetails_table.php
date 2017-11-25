<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderDetails', function (Blueprint $table) {
            $table->integer('itemId');
            $table->integer('orderId')->unsigned();
            $table->integer('menuId')->unsigned();
            $table->integer('quantity');
            $table->double('price');
            $table->timestamps();

            $table->primary('itemId');
            $table->foreign('orderId')->references('orderId')->on('orders');
            $table->foreign('menuId')->references('menuId')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderDetails');
    }
}
