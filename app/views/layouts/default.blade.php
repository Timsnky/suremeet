<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>SureMeet</title>
    <link rel="stylesheet" href="bower/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="bower/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="bower/angular/angular.min.js"></script>
    <script src="bower/angular-route/angular-route.min.js"></script>
    <script src="bower/jquery/dist/jquery.min.js"></script>
    <script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="bower/angular-smart-table/dist/smart-table.min.js"></script>
</head>
<body>
    <div class="container">
        @include('layouts.partials.nav')
        @include('flash::message')
        @yield('content')
    </div>
</body>
</html>