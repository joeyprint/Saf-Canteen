<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('stfId');
            $table->string('stfFirstName', 100);
            $table->string('stfLastName', 100);
            $table->string('stfPosition', 150);
            $table->integer('stfManager')->unsigned()->nullable(true);
            $table->string('stfAddress', 250);
            $table->string('stfTel', 15);
            $table->integer('branchId')->unsigned();
            $table->timestamps();

            $table->foreign('branchId')->references('branchId')->on('branchs');
            $table->foreign('stfManager')->references('stfId')->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
