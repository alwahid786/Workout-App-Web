<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('user_type')->nullable();
            $table->integer('otp_code')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->text('about')->nullable();
            $table->string('relationship_emergency_contact')->nullable();
            $table->string('workout_location')->nullable();
            $table->string('madical_condition')->nullable();
            $table->string('google_id')->nullable();
            $table->string('insta_id')->nullable();
            $table->string('facebook_id')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
