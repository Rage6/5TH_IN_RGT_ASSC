<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimespanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timespan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('start_year')->nullable()->default(null);
            $table->integer('end_year')->nullable()->default(null);
            $table->integer('start_month')->nullable();
            $table->integer('end_month')->nullable();
            $table->string('job')->nullable();
            $table->string('unit')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timespan');
    }
}
