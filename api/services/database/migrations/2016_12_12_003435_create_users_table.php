<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('userId', true);
			$table->string('userName', 45);
			$table->string('password', 500)->nullable();
			$table->string('emailId', 45);
			$table->integer('maxLevelReached')->nullable()->index('fk_level_reached_idx');
			$table->integer('maxScore')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
