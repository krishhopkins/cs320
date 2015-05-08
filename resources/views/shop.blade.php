@extends('app')

@section('content')
    <!-- Page Content -->
    <div class="container">
  <h2>Shop</h2>
  <p>The items are shared between characters but only _one_ character can use at the same time</p>            
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
    @foreach($items as $item)
        <td> {{$item[1]}} </td>
        <td> {{$item[2]}} </td>
        <td> {{$item[3]}} </td>
        <td> {{$item[4]}} </td>
        <td> {{$item[5]}} </td>
        <td> {{$item[6]}} </td>
        <td> {{$item[7]}} </td>
        <td> @if ($item[8]) Already in invetory @else <a href="#">Buy</a>@endif</td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

@endsection
