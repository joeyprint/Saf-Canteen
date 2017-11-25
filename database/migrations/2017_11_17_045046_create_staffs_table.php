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
            $table->increments('stfid');
            $table->string('email');
            $table->string('password');
            $table->string('stfFirstName');
            $table->string('stfLastName');
            $table->string('stfPosition');
            $table->integer('stfManager')->unsigned();
            $table->string('stfAddress');
            $table->string('stfTel');
            $table->timestamps();

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
