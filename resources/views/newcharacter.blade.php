<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMORPG</title>

    <link href="{{ asset('/css/cs/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/cs/custom.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Page Content -->
    <div class="container">
  Create a new Character
  <form role="form">
    <div class="form-group">
      <label for="email">Nickname:</label>
      <input type="email" style="width: 200px;" width=class="form-control" id="email" placeholder="nickname">
    </div>
    <div class="form-group">
      <label for="pwd">Class:</label>
      <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Select Class
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Warrior</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Monk</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Healer</a></li>
    </ul>
  </div>
    </div>
    <button type="submit" class="btn btn-default">Create Character</button>
  </form>
</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>