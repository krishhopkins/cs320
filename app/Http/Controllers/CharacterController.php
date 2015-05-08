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

		return view('home', array('chars' => $char_arr, 'num_chars' => $num));
	}

	public function create_new()
	{
		$stats = array();
		for ($i = 0; $i < 4; $i++)
		{
			array_push($stats,rand(1, 6));
		}
		return view('newcharacter', array('st' => $stats, 'empty' => null));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$input = Input::get('nickname');
		$class = Input::get('class-type');
		$class = strtoupper($class);
		$str = Input::get('st0');
		$dex = Input::get('st1');
		$int = Input::get('st2');
		$luk = Input::get('st3');


		DB::table('char')->insert(array(
			'owner_id' => Auth::user()->id,
			'name' => $input,
			 'level' => 1,
			 'gold' => 100,
			 'experience' => 1,
			 'class' => $class,
			 'current_location' => 1,
			 'hp' => 100,
			 'str' => $str,
			 'dex' => $dex,
			 'int' => $int,
			 'luk' => $luk,
			));

		return redirect()->action('CharacterController@index');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete()
	{
		return view('characterdeleteconf');
	}

	public function delete_c($name)
	{
		$result = DB::table('char')->where('name', $name)->delete();
		return redirect()->action('CharacterController@index');
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
