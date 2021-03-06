<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->down();

		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profile_id');
			$table->string('email', 255);
			$table->string('username', 255);
			$table->string('password', 255);
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
			$table->timestamp('deleted_at');
			$table->integer('status');
			$table->integer('flag_banned');
			$table->string('remember_token', 100);
		});

		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->string('website', 255);
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
			$table->timestamp('deleted_at');
		});

		Schema::create('password_resets', function(Blueprint $table)
		{
			$table->string('email')->index();
			$table->string('token')->index();
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
		Schema::dropIfExists('profiles');
		Schema::dropIfExists('password_resets');
	}

}
