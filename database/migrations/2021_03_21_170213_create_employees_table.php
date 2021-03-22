<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('email')->unique();
			$table->string('name');
			$table->string('password');
			$table->string('national_id');
			$table->string('avatar_img')->nullable();
			$table->integer('manager_id')->unsigned()->nullable();
			$table->string('role')->nullable();
			$table->boolean('is_banned')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}