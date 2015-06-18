<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('updates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('content');
			$table->string('headline')->nullable();
			$table->timestamp('published_on')->nullable();
			$table->softDeletes();
			$table->timestamp('expires_on')->nullable();
			$table->integer('category_id');
			$table->timestamps();
		});
		Schema::create('attachments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('filename');
			$table->integer('size');
			$table->integer('update_id')->nullable();
			$table->string('type');
			$table->softDeletes();
			$table->timestamps();
		});
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
		});
		Schema::create('category_user', function(Blueprint $table)
		{
			$table->integer('user_id');
			$table->integer('category_id');
			$table->primary(['user_id','category_id']);
			$table->tinyInteger('access');
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
		Schema::drop('updates');
		Schema::drop('attachments');
		Schema::drop('categories');
		Schema::drop('category_user');
	}

}
