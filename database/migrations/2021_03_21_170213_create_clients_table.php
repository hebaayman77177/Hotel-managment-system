<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->boolean('is_approved')->nullable();
			$table->integer('receptionist_id')->unsigned()->nullable();
			$table->string('name');
			$table->string('email')->unique();
			$table->string('mobile')->unique();
			$table->string('country')->nullable();
			$table->enum('gender', array('male', 'female'));
			$table->string('password');
			$table->string('avatar_img')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}