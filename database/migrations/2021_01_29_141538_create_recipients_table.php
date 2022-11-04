<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('rank');
            $table->string('action_date');
            $table->string('place');
            $table->text('citation');
            $table->string('posthumous');
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('member_id')->nullable()->default(null);
            $table->foreign('member_id')
                  ->references('id')
                  ->on('users')
                  ->nullable()
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('recipients');
    }
}
