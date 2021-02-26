<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConflictLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conflict_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conflict_id')->nullable()->default(null);
            $table->index('conflict_id');
            $table->foreign('conflict_id')
              ->references('id')
              ->on('conflicts')
              ->nullable()
              ->constrained()
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->unsignedBigInteger('casualty_id')->nullable()->default(null);
            $table->index('casualty_id');
            $table->foreign('casualty_id')
              ->references('id')
              ->on('casualties')
              ->nullable()
              ->constrained()
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->unsignedBigInteger('member_id')->nullable()->default(null);
            $table->index('member_id');
            $table->foreign('member_id')
              ->references('id')
              ->on('users')
              ->nullable()
              ->constrained()
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->unsignedBigInteger('recipient_id')->nullable()->default(null);
            $table->index('recipient_id');
            $table->foreign('recipient_id')
              ->references('id')
              ->on('recipients')
              ->nullable()
              ->constrained()
              ->onUpdate('cascade')
              ->onDelete('cascade');
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
        Schema::dropIfExists('conflict_links');
    }
}
