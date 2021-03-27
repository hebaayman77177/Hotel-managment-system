<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	public function up()
	{
		Schema::create('rooms', function(Blueprint $table) {
			$table->increments('number');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('capacity')->unsigned();
			$table->bigInteger('price')->unsigned();
			$table->integer('manager_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('rooms');
	}
}