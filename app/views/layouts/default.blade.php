<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SureMeet</title>
    <link rel="stylesheet" href="bower/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    @include('layouts.partials.nav')

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    <script src="bower/jquery/dist/jquery.min.js"></script>
    <script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>