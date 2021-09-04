<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldsToTouristAttractionGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tourist_attraction_galleries', function (Blueprint $table) {
            $table->boolean('is_home');
            $table->boolean('is_tempatWisata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tourist_attraction_galleries', function (Blueprint $table) {
            $table->dropColumn('is_home');
            $table->dropColumn('is_tempatWisata');
        });
    }
}
