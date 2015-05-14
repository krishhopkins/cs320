<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemakeParty extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('party');
		Schema::create('party', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('partyLeaderId')->nullable();
			$table->foreign('partyLeaderId')->references('id')->on('char');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
