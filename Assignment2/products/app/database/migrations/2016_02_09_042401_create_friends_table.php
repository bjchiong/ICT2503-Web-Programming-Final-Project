<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('friends',
		function($table)
		{
			$table->increments('id');
			$table->integer('user_id'); // foreign key
			$table->integer('friend_id'); // foreign key
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
		Schema::drop('friends');
	}

}
