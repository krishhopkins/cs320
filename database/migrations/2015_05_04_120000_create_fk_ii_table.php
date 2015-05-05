<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkIiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('item_instance', function(Blueprint $table)
		{
			$table->foreign('char_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('item_id')->references('id')->on('item')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('item_instance', function(Blueprint $table)
		{

			$table->dropForeign('item_instance_char_id_foreign');
			$table->dropForeign('item_instance_item_id_foreign');
		});
	}

}
