<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('posts',
		function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('user_id'); // foreign key user_id is id in User
			$table->string('title');
			$table->string('message');
			$table->string('privacy');
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
		Schema::drop('posts');
	}

}
