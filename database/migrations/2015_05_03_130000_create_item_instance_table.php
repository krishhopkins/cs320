<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemInstanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_instance', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('char_id')->unsigned();
			$table->integer('item_id')->unsigned();
			$table->boolean('equipped');
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
		Schema::drop('item_instance');
	}

}
