@extends('app')

@section('content')
  <div class="container">
  <h2>Your Characters | 

    <!-- Button HTML (to Trigger Modal) -->
    <a href="new" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">Create new character</a>
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>



  </h2>
  <p>You have [num] characters. All of them are in good standing!</p>            
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