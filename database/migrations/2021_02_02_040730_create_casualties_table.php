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
            $table->string('rank');
            $table->string('date_of_death');
            $table->string('conflict');
            $table->string('place');
            $table->string('injury_type');
            $table->string('city');
            $table->string('state');
            $table->string('burial_site');
            $table->unsignedBigInteger('member_id')->nullable()->default(null);
            $table->foreign('member_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('casualties');
    }
}
