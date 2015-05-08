@extends('app')

@section('content')
 <div class="container">
  <h2>Create a new Character</h2>
  <form role="form" method="POST" action="{{ url('/') }}">
    <div class="form-group">
      <label for="email">Nickname:</label>
      <input type="text" class="form-control" id="nickname" placeholder="nickname">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </div>
    <div class="form-group">
      <label for="pwd">Class:</label>
      <div class="dropdown">
        <label class="radio-inline">
      <input type="radio" name="warrior">WARRIOR
    </label>
    <label class="radio-inline">
      <input type="radio" name="mage">MAGE
    </label>
    <label class="radio-inline">
      <input type="radio" name="class">HEALER
    </label>
    <label class="radio-inline">
      <input type="radio" name="monk">MONK
    </label>
  </div>
    </div>
    <button type="submit" class="btn btn-default">Create Character</button>
  </form>
</div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

@endsection