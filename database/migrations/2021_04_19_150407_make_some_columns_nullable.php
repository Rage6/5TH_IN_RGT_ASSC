<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeSomeColumnsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casualties', function (Blueprint $table) {
          $table->string('place')->nullable()->default(null)->change();
          $table->string('injury_type')->nullable()->default(null)->change();
          $table->string('city')->nullable()->default(null)->change();
          $table->string('state')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('casualties', function (Blueprint $table) {
            //
        });
    }
}
