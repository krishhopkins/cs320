<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Auth;
class ShopController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = DB::table('item')->get();

		$items_arr = array();
		foreach($items as $item)
		{
			$it = array();
			array_push($it, $item->id);
			array_push($it, $item->name);
			array_push($it, $item->slot);
			array_push($it, $item->bonus_str);
			array_push($it, $item->bonus_dex);
			array_push($it, $item->bonus_int);
			array_push($it, $item->bonus_luk);
			array_push($it, $item->price);

			/* already on account or not? */
			$uid = Auth::user()->id;
			$search = DB::table('item_instance')->where('item_id', $item->id)->where('char_id', $uid)->count();
			array_push($it, $search);
			array_push($items_arr, $it);
		}
		/*
		echo "<pre>";
		var_dump($items_arr);
		echo "</pre>";
		*/
		return view('shop', array('items' => $items_arr));
	}

		public function iindex($name)
		{
			return view('inventory')->with('name', $name);
		}

		public function iindex_all()
		{
			return view('inventory')->with('settings', 'all');
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
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
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
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
