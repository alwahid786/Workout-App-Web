<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->string('users')->nullable();
            $table->integer('trainer_id')->nullable();
            $table->integer('session_id')->nullable();
            $table->boolean('status')->default(1)->comment('1: chat start, 0: chat expire');
            $table->boolean('type')->default(0)->comment('1:group chat , 0:single chat');
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
        Schema::dropIfExists('chats');
    }
}
