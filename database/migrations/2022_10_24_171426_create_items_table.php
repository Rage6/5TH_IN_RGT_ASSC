<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->bigInteger('event_id')->unsigned();
            $table->index('event_id');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->bigInteger('subevent_id')->unsigned();
            $table->index('subevent_id');
            $table->foreign('subevent_id')->references('id')->on('subevents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
