<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFloorsTable extends Migration {

	public function up()
	{
		Schema::create('floors', function(Blueprint $table) {
			$table->increments('number');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->integer('manager_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('floors');
	}
}