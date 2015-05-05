<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
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

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
