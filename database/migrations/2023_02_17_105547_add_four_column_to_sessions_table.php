<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFourColumnToSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->integer('limit')->default(1);
            $table->string('preference')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('price_unit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropColumn('limit');
            $table->dropColumn('preference');
            $table->dropColumn('sub_category');
            $table->dropColumn('price_unit');
        });
    }
}
