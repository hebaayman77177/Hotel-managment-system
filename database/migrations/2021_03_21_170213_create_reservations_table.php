<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationsTable extends Migration {

	public function up()
	{
		Schema::create('reservations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('client_id')->unsigned()->nullable();
			$table->integer('room_number')->unsigned()->nullable();
			$table->integer('accompany_number')->unsigned();
			$table->bigInteger('paid_price')->unsigned();
			$table->datetimeTz('from_date')->nullable();
			$table->datetimeTz('to_date')->nullable();
			$table->boolean('is_approved')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('reservations');
	}
}