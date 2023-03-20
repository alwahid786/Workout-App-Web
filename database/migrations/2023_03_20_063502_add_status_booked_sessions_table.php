<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusBookedSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booked_sessions', function (Blueprint $table) {
            $table->integer('status')->default('0')->comment('0: Pending, 1: Accepted ,2:Rejected');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booked_sessions', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
