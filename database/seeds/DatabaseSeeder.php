<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		
		DB::table('location')->insert(['loc_name' => 'Starterton', 'loc_type' => 'TOWN', 'loc_img'  => '0']);
		DB::table('location')->insert(['loc_name' => 'Betatown', 'loc_type' => 'TOWN', 'loc_img'  => '1']);
		DB::table('location')->insert(['loc_name' => 'Crossroads', 'loc_type' => 'TOWN', 'loc_img'  => '2']);
		DB::table('location')->insert(['loc_name' => 'Dogtown', 'loc_type' => 'TOWN', 'loc_img'  => '3']);
		DB::table('location')->insert(['loc_name' => 'Eviltown', 'loc_type' => 'DUNGEON', 'loc_img'  => '4']);
		DB::table('location')->insert(['loc_name' => 'Ratchet', 'loc_type' => 'TOWN', 'loc_img'  => '5']);
		
	}
	

}

