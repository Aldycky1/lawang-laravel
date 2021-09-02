<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteSomeFieldsAtTouristAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tourist_attractions', function (Blueprint $table) {
            $table->dropColumn('facilities_id');
            $table->dropColumn('tourist_packages_id');
            $table->dropColumn('hotels_id');
            $table->dropColumn('capacities_id');
            $table->dropColumn('regulations_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tourist_attractions', function (Blueprint $table) {
            $table->integer('facilities_id');
            $table->integer('tourist_packages_id');
            $table->integer('hotels_id');
            $table->integer('capacities_id');
            $table->integer('regulations_id');
        });
    }
}
