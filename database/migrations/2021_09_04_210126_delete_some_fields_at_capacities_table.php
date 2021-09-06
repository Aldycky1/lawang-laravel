<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteSomeFieldsAtCapacitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('capacities', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('hotels_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('capacities', function (Blueprint $table) {
            $table->integer('price');
            $table->integer('hotels_id');
        });
    }
}
