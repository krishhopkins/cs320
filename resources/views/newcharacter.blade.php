@extends('app')

@section('content')

    <!-- Page Content -->
    <div class="container">
  <h1>Create a new character</h1>
  <form role="form" method="POST" action="{{url('characters')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="nickname">Nickname:</label>
      <input type="text" style="width: 200px;" class="form-control" name="nickname" id="nickname" placeholder="nickname">
    </div>
    <div class="form-group">
  <label for="class-type">Class:</label>
   <label class="checkbox-inline">
      <input type="radio" name="class-type" id="class-type"
         value="1" checked> Warrior
   </label>
   <label class="checkbox-inline">
      <input type="radio" name="class-type" id="class-type" 
         value="2"> Mage
   </label>
   <label class="checkbox-inline">
      <input type="radio" name="class-type" id="class-type" 
         value="3"> Monk
   </label>
   <label class="checkbox-inline">
      <input type="radio" name="class-type" id="class-type" 
         value="4"> Healer
   </label>
   <div class="form-group">
   <label for="stats">Stats: </label>      @foreach($st as $i) {{ $i }} @endforeach
</div>
    <!-- insecure - fix later -->
    <?php $j = 0 ?>
    @foreach($st as $i)
    <input type="hidden" name="st{{$j++}}" value="{{ $i }}">
    @endforeach
    <button type="submit" class="btn btn-default">create new character</button>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

@endsection