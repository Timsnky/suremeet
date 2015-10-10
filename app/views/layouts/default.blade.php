<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SureMeet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    @include('layouts.partials.nav')

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>