<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('char', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('owner_id')->unsigned();
			$table->string('name')->unique();
			$table->integer('level');
			$table->integer('gold');
			$table->integer('experience');
			//$table->enum("class", 
			//	array('WARRIOR', 'MAGE', 'HEALER', 'MONK'));
			$table->integer('class')->unsigned();
			$table->integer('current_location')->unsigned();
			$table->integer('hp');
			$table->integer('str');
			$table->integer('dex');
			$table->integer('int');
			$table->integer('luk');
			$table->boolean('isBanned');
			$table->string('ban_reason');
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
		Schema::drop('char');
	}

}
