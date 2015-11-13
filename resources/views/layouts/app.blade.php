<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Raleway';
            margin-top: 25px;
        }
        .fa-btn {
            margin-right: 6px;
        }
        .table-text div {
            padding-top: 6px;
        }
        html, body {
          height: 96%;
        }

        #wrap {
          min-height: 100%;
          padding-bottom: 30px;
        }

        .footer {
          position: relative;
          margin-top: -30px;
          height: 30px;
          clear:both;
          padding-top:10px;
        }
    </style>

    <script>
        (function () {
            $('#task-name').focus();
            $('#word-name').focus();
        }());
    </script>
</head>

<body>
    <div class="container" id="wrap">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/">Laravel</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="/words">Words</a></li>
                        <li><a href="/tasks">Tasks</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="/auth/register"><i class="fa fa-btn fa-heart"></i>Register</a></li>
                            <li><a href="/auth/login"><i class="fa fa-btn fa-sign-in"></i>Login</a></li>
                        @else
                            <li class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
                            <li><a href="/auth/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">© 2015 GitHub, Inc. Terms Privacy Security Contact Help</p>
        </div>
    </footer>
</body>
</html>
