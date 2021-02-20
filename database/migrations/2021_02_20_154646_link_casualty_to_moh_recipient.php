<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LinkCasualtyToMohRecipient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casualties', function (Blueprint $table) {
            $table->unsignedBigInteger('moh_id')->nullable()->default(null);
            $table->foreign('moh_id')
                  ->references('id')
                  ->on('recipients')
                  ->nullable()
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
