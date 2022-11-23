<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConflictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conflicts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('start_year');
            $table->integer('end_year')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('conflicts');
    }
}
