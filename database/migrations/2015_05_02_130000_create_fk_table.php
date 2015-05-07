<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('char', function(Blueprint $table)
		{
			$table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('class')->references('id')->on('class')->onDelete('cascade');
			$table->foreign('current_location')->references('id')->on('location')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('char', function(Blueprint $table)
		{
			$table->dropForeign('char_owner_id_foreign');
			$table->dropForeign('char_class_foreign');
			$table->dropForeign('char_current_location_foreign');
		});
	}


}
