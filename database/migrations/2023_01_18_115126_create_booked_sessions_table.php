<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('session_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->boolean('is_completed')->nullable();

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
        Schema::dropIfExists('booked_sessions');
    }
}
