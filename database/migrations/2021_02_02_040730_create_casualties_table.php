<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasualtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casualties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable()->default(null);
            $table->string('rank');
            $table->string('unit')->nullable();
            $table->integer('day_of_death');
            $table->integer('month_of_death');
            $table->integer('year_of_death');
            $table->string('place')->nullable()->default(null);
            $table->string('injury_type')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('burial_site');
            $table->text('comments')->nullable()->default(null);
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('member_id')->nullable()->default(null);
            $table->foreign('member_id')
                  ->references('id')
                  ->on('users')
                  ->nullable()
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('moh_id')->nullable()->default(null);
            $table->foreign('moh_id')
                  ->references('id')
                  ->on('recipients')
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
            $table->string('burial_site')->nullable()->default(null)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casualties');
    }
}
