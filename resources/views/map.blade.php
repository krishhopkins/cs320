@extends('app')

@section('content')

<div class="container">
	<div class="col-md-3">
		<div id="playerInfo">
				<h2>Name: {{$char->name}}</h2>
				<h3>Class: {{$char->class}}</h3>
				<h4>Level: <b>{{$char->level}}</b></h4>
				<h4>Health: <b>{{$char->hp}}</b></h4>
				<h4>Strengh: <b>{{$char->str}}</b></h4>
				<h4>Dexterity: <b>{{$char->dex}}</b></h4>
				<h4>Intelligence: <b>{{$char->int}}</b></h4>
				<h4>Luck: <b>{{$char->luk}}</b></h4>
		</div>
		
		<div id="otherPlayers">
    		<h2><i>Enter a location to travel to below: </i></h2>
			{!! Form::open(array('action' => 'MapController@changeLoc')) !!}
			{!! Form::Label('Location:') !!}
			{!! Form::select('passedLoc', $locList,2) !!}
			{!! Form::hidden('charId', $char->id) !!}
			{!! Form::submit('Go!') !!}
			{!! Form::close() !!}
		</div>
	</div>
	<div class="col-md-9">
		<h1 style="text-align:center"><b>World Map</b></h1>
		<img style="margin-left: auto; margin-right: auto; display: block" src="{{ $curLoc }}"/>
		<h2 style="text-align:center">Location: {{$curLocName}}</h2>
	</div>
</div>

@endsection
