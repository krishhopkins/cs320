@extends('app')

@section('content')
  <div class="container">
  <h2>You're going to delete <i> {{ $name }} </i></h2>
  </h2>
  <a href = "delete/cfm">DELETE CHARACTER</a>        
</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

@endsection