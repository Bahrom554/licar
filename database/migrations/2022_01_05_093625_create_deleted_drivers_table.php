<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeletedDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deleted_drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver');
            $table->string('owner')->nullable();
            $table->string('tel_d');
            $table->string('tel_o')->nullable();
            $table->string('car');
            $table->string('car_number');
            $table->date('l_start');
            $table->date('l_end');
            $table->unsignedInteger('total_cost');
            $table->unsignedInteger('paid_cost');
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('deleted_drivers');
    }
}
