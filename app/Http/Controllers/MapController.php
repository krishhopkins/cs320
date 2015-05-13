<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Input;
use Illuminate\Http\Request;

class MapController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public $location ='';
	public function index()
	{
		$uid = Auth::user()->id;
		$curChar = DB::table('users')->where('id', $uid)->pluck('curChar');
		$char = DB::table('char')->where('id', (string)$curChar)->first();
		if($this->location != ''){
			$curLoc = $this->location;
			
		}
		else{
			$curLoc = $char->current_location;
			$this->location = $curLoc;
		}
		
		$locName = DB::table('location')->where('id', $curLoc)->pluck('loc_name');
		
	    $uid = Auth::user()->id;

		$chars = DB::table('char')->where('owner_id', $uid);

		$num = DB::table('char')->where('owner_id', $uid)->count();

		
		$allLocs = DB::table('location')->get();
		$locName = DB::table('location')->where('id', $curLoc)->pluck('loc_name');
		$className = DB::table('class')->where('id' ,$char->class)->pluck('class_name');
		$char->class = $className;
		$locList = array();
		foreach ($allLocs as $loc){
			$locList[$loc->loc_name] = $loc->loc_name;
		}
	
		
		$imgURL = asset('img/map'.$curLoc.'.png');
		return view('map', array('curLoc' => $imgURL, 'curLocName' => (string)$locName, 'uid' => $uid, 'locList' => $locList, 'char' => $char));
	}

	public function changeLoc(){
		$data = Input::all();
		$loc = Input::only('passedLoc'); //this isn't coming in right, i need to figure out why
		//$loc = "Starterton";
		$curChar = Input::get('charId');
		$locId = DB::table('location')->where('loc_name', $loc)->pluck('id');
		DB::table('char')->where('id', $curChar)->update(array('current_location' => $locId));
		//$this->location = $loc;
		return($this->index());
	}
	

}
