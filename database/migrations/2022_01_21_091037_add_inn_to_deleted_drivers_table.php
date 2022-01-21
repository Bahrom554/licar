<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInnToDeletedDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deleted_drivers', function (Blueprint $table) {
            $table->string('inn_o');
            $table->string('inps_o');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deleted_drivers', function (Blueprint $table) {
            $table->dropColumn('inn_o');
            $table->dropColumn('inps_o');
        });
    }
}
