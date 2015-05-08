@extends('app')
@section('content')

    <div class="container">
  <h2>Inventory for <i>@if(isset($name)) {{ $name }}  @else {{Auth::user()->name}} @endif</i></h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Slot</th>
        <th>Bonus STR</th>
        <th>Bonus DEX</th>
        <th>Bonus INT</th>
        <th>Bonus LUK</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td>Chief Hair</td>
        <td>HEAD</td>
        <td>+5</td>
        <td>+5</td>
        <td>+5</td>
        <td>+5</td>
        <td>100</td>
        <td><a href="#">Equip</a> | <a href="#">Sell</a></td>
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
