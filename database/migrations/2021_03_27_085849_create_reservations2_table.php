<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservations2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
                $table->softDeletes();
                $table->integer('client_id')->unsigned();
                $table->integer('room_number')->unsigned();
                $table->integer('accompany_number')->unsigned();
                $table->bigInteger('paid_price')->unsigned();
                $table->datetimeTz('from_date')->nullable();
                $table->datetimeTz('to_date')->nullable();
                $table->boolean('is_approved')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations2');
    }
}
