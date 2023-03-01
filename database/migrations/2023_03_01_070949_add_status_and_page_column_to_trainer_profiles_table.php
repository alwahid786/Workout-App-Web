<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndPageColumnToTrainerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainer_profiles', function (Blueprint $table) {
            $table->boolean('status')->default(0);
            $table->integer('page')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainer_profiles', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('page');
        });
    }
}
