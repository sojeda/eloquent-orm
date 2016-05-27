<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                    Eloquent ORM de Laravel
                </title>
                <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" rel="stylesheet">
                    <style media="screen" type="text/css">
                        body{
			margin-top:  50px;
		}
                    </style>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    Eloquent ORM
                </a>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    @include('partials.menu')
                </ul>
            </div>
        </nav>
        @yield('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
        </script>
    </body>
</html>