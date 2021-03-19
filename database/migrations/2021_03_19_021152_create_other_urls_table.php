<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_urls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->timestamps();

            $table->unsignedBigInteger('member_id')->nullable()->default(null);
            $table->index('member_id');
            $table->foreign('member_id')
              ->references('id')
              ->on('users')
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
            $table->unsignedBigInteger('moh_id')->nullable()->default(null);
            $table->index('moh_id');
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
        Schema::dropIfExists('other_urls');
    }
}
