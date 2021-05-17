<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 8 - CRUD App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Just an image -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('favicon.ico') }}" width="50" height="50" alt="">
        </a>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('welcome') }}"> Home</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>