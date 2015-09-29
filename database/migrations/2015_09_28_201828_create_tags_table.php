<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('articles_tags', function(Blueprint $table)
		{
			$table->integer('articles_id')->unsigned()->index();
			$table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade');
			$table->integer('tags_id')->unsigned()->index();
			$table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
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
		Schema::drop('tags');
		Schema::drop('articles_tags');
	}

}
