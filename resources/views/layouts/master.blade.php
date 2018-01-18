<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <style>
        body {
                background-color: lightcyan;

            font-family: 'Ubuntu Mono', monospace !important;
        }
    </style>
    <title>E-Marketing</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="/">E-MARKETING</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


                <li><a href="/">HOME <span class="sr-only">(current)</span></a></li>
                {{--<li><a href="/news/1">SPORT</a></li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/news/1">Prossesing</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/news/2">Writting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/news/3">Technology</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/news/4">Gift Ideas</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/news/5">General</a></li>
                    </ul>
                </li>
                <li><a href="/create_sponser">Create Sponser<span class="sr-only">(current)</span></a></li>
            </ul>
            @auth
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout">Logout</a></li>
                    <li><a href={{route('register')}}>Register</a></li>
                </ul>
                @else
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href={{route('login')}}>Login</a></li>
                        <li><a href={{route('register')}}>Register</a></li>


                    </ul>
        @endauth

        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
@yield('js')
</body>
</html>




