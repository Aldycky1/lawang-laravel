<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTouristPackagesIdFieldAtCapacitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('capacities', function (Blueprint $table) {
            $table->dropColumn('tourist_packages_id');
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
            $table->integer('tourist_packages_id');
        });
    }
}
