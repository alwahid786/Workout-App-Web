<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountryAndAreaInWorkoutLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workout_locations', function (Blueprint $table) {
           $table->string('area')->nullable();
           $table->string('country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workout_locations', function (Blueprint $table) {
           $table->dropColumn('country');
           $table->dropColumn('area');
        });
    }
}
