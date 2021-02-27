<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConflictIdColumnToCasualties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casualties', function (Blueprint $table) {
          $table->unsignedBigInteger('conflict_id')->nullable()->default(null);
          $table->index('conflict_id');
          $table->foreign('conflict_id')
            ->references('id')
            ->on('conflicts')
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
