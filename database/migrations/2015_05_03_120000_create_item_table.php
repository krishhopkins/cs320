<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->enum('rarity', 
				array('COMMON', 'RARE', 'EPIC', 'LEGENDARY'));
			$table->enum('slot',
				array('HEAD', 'CHEST', 'LEGS', 'SHOULDERS', 'WEAPON', 'TRINKET'));
			$table->integer('bonus_str')->nullable();
			$table->integer('bonus_dex')->nullable();
			$table->integer('bonus_int')->nullable();
			$table->integer('bonus_luk')->nullable();
			$table->integer('price');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('item');
	}

}
