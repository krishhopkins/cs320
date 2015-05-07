@extends('app')

@section('content')

    <!-- Page Content -->
    <div class="container">
    <h2>Login</h2>
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
    <form class="col-md-6" role="form" method="POST" action="{{ url('/auth/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Login</button>
        <!--
        <span><a href="#">Need help?</a></span>
        <span class="pull-right"><a href="#">New Registration</a></span>
        -->
    </div>
</form>
</div>
@endsection
