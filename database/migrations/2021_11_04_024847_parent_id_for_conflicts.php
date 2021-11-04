<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParentIdForConflicts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conflicts', function (Blueprint $table) {
          $table->unsignedBigInteger('parent_id')->nullable()->default(null);
          $table->foreign('parent_id')
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
        Schema::table('conflicts', function (Blueprint $table) {
            //
        });
    }
}
