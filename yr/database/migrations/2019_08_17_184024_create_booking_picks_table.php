<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingPicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_picks', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('service');
            $table->string('price');
            $table->string('date');
            $table->string('time');
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
        Schema::dropIfExists('booking_picks');
    }
}
