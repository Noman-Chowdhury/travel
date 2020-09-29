<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookcarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookcars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_id');
            $table->string('destination');
            $table->decimal('people');
            $table->decimal('cars');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->decimal('totalprice');
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
        Schema::dropIfExists('bookcars');
    }
}
