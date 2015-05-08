@extends('app')

@section('content')
  <div class="container">
  <h2>Your Characters | <a href="{{ url('new') }}">Create a new character</a>
  </h2>
  <p>You have {{ $num_chars }} characters. All of them are in good standing!</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Level</th>
        <th>Gold</th>
        <th>Experience</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($chars as $char)
        <tr>
        <td>{{ $char[0] }}</td>
        <td>{{ $char[1] }}</td>
        <td>{{ $char[2] }}</td>
        <td>{{ $char[3] }}</td>
        <td>{{ $char[4] }}</td>
        <td><a href="#">More info</a> | <a href="characters/{{$char[0]}}/inventory">Inventory</a> | <a href="characters/{{ $char[0] }}/delete">Delete</a></td>
        @endforeach
        </tr>
    </tbody>
  </table>
</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

@endsection