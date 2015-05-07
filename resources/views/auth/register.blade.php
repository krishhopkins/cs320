@extends('app')

@section('content')

    <!-- Page Content -->
    <div class="container">
    <h2>Register</h2>
    <!-- pasted -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- pasted -->

    <form class="col-md-6" role="form" method="POST" action="{{ url('/auth/register') }}">


      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password_confirmation"placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Create new account</button>
        <!--
        <span><a href="#">Need help?</a></span>
        <span class="pull-right"><a href="#">New Registration</a></span>
        -->
    </div>
</form>
</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
@endsection
<!--
</body>

</html>
-->