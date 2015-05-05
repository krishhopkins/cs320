<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Input;
use Illuminate\Http\Request;

class CharacterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$uid = Auth::user()->id;

		$chars = DB::table('char')->where('owner_id', $uid);

		$num = DB::table('char')->where('owner_id', $uid)->count();

		$char_arr = array();

		foreach($chars->get() as $chr)
		{
			$curr = array();
			array_push($curr, $chr->name, $chr->class, $chr->level, $chr->gold, $chr->experience);
			array_push($char_arr, $curr);
		}

		return view('characters', array('chars' => $char_arr, 'num_chars' => $num));
	}

	public function create_new()
	{
		$stats = array();
		for ($i = 0; $i < 4; $i++)
		{
			array_push($stats,rand(1, 8));
		}
		$gbl = $stats;
		return view('characters-new', array('st' => $stats));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$input = Input::get('name');
		$class = Input::get('class-type');
		$class = strtoupper($class);
		$gbl = Input::get('st');

		DB::table('char')->insert(array(
			'owner_id' => Auth::user()->id,
			'name' => $input,
			 'level' => 1,
			 'gold' => 100,
			 'experience' => 1,
			 'class' => $class,
			 'current_location' => 1,
			 'hp' => 100,
			 'str' => $gbl[0],
			 'dex' => $gbl[1],
			 'int' => $gbl[2],
			 'luk' => $gbl[3],
			));

		return redirect()->action('CharacterController@index');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
