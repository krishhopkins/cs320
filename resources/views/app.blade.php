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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- for mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <!-- the three bars when the toggle button is shown -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">DB : The MMO</a>
            </div>
            <!-- the menus -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li><a href="{{ url('auth/login') }}">Login</a></li>
                    <li><a href="{{ url('auth/register') }}">Register</a></li>
                    <li><a href="{{ url('/') }}">About</a></li>
                @else
                    <li><a href="{{url('characters')}}">Characters</a></li>
                    <li><a href="{{url('inventory')}}">Inventory</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>
                    <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- content -->
    @yield('content')

</body>
</html>
