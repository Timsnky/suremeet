<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SureMeet</title>
    <link rel="stylesheet" href="bower/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="bower/angular/angular.min.js"></script>
    <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
    <script src="bower/jquery/dist/jquery.min.js"></script>
    <script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body ng-app = "mainApp">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SureMeet</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/schedules">Schedules</a></li>
                <li><a href="/register_presentation">Register Presentation</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Dashboard</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Meeting Manager<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Presentations</a></li>
                        <li><a href="#frequency">Settings</a> </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <ul class="nav nav-stacked">
                <li role="presentation" class="active"><a href="#frequency">Frequency of Meetings</a></li>
                <li role="presentation" class="active"><a href="#columns">Columns in Schedules Page</a></li>
            </ul>
        </div>
        <div class="col-sm-9">

            <div ng-view></div>

            <script type = "text/ng-template" id = "frequency.htm">
                <div class="settings">
                    <h4>Set the Frequency for holding the meetings</h4>
                    <form role="form">
                        <div class="form-group">
                            <label for="days">Number in Days:</label>
                            <input type="number" class="form-control" id="days" name="days">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>

                    </form>
                </div>
            </script>

            <script type = "text/ng-template" id = "columns.htm">
                <div class="settings">
                    <h4>Set the numbers of schedule columns on display in the Schedules page</h4>
                    <form role="form">
                        <div class="form-group">
                            <label for="date">Columns:</label>
                            <select class="form-control" id="columns" name="columns">
                                <option value="1">1</option>
                                <option value="3">3</option>
                                <option value="5">5</option>
                                <option value="7">7</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>

                    </form>

                </div>

            </script>
        </div>
    </div>
</div>
<div>

</div>

<script>
    var mainApp = angular.module("mainApp", ['ngRoute']);
    mainApp.config(['$routeProvider', function($routeProvider) {
        $routeProvider.

            when('/frequency', {
                templateUrl: 'frequency.htm',
                controller: 'frequencyController'
            }).

            when('/columns', {
                templateUrl: 'columns.htm',
                controller: 'columnsController'
            }).

            otherwise({
                redirectTo: '/frequency'
            });
    }]);

    mainApp.controller('frequencyController', function($scope) {
    });

    mainApp.controller('columnsController', function($scope) {
    });

</script>

</body>
</html>