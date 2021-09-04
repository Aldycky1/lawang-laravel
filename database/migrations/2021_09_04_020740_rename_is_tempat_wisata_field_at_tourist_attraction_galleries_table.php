<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameIsTempatWisataFieldAtTouristAttractionGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tourist_attraction_galleries', function (Blueprint $table) {
            $table->renameColumn('is_tempatWisata', 'is_tempat_wisata');
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
            $table->renameColumn('is_tempat_wisata', 'is_tempatWisata');
        });
    }
}
