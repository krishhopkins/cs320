@extends('app')

@section('content')
  <div class="container">
  <h2>Your Characters | <a href="#"> Create new character</a></h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
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
      <tr>
        <td>sampleChar1</td>
        <td>WARRIOR</td>
        <td>200</td>
        <td>100,000</td>
        <td>0 [100%]</td>
        <td><a href="#">More info</a> | <a href="#">Inventory</a> | <a href="#">Delete</a></td>
      </tr>
      <tr>
        <td>sampleChar2</td>
        <td>WARRIOR</td>
        <td>20</td>
        <td>50,000</td>
        <td>35 [45%]</td>
        <td><a href="#">More info</a> | <a href="#">Inventory</a> | <a href="#">Delete</a></td>
      </tr>
      <tr>
        <td>sampleChar3</td>
        <td>MONK</td>
        <td>200</td>
        <td>100,000</td>
        <td>35 [45%]</td>
        <td><a href="#">More info</a> | <a href="#">Inventory</a> | <a href="#">Delete</a></td>
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