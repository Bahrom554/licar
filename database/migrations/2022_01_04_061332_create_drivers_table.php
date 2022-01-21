<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver');
            $table->string('owner')->nullable();
            $table->string('tel_d');
            $table->string('tel_o')->nullable();
            $table->string('car');
            $table->string('car_number');
            $table->string('company');
            $table->string('inn');
            $table->string('inps');
            $table->date('c_start');
            $table->date('c_end');
            $table->unsignedInteger('l_cost');
            $table->date('expire_date');
            $table->string('inn_o');
            $table->string('inps_o');
            $table->boolean('index')->default(1);
            $table->date('l_start');
            $table->date('l_end');
            $table->unsignedInteger('total_cost');
            $table->integer('paid_cost');
            $table->integer('status')->nullable();
            $table->integer('debt')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
