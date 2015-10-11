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

<body ng-app = "dashboardApp">
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
                <li><a href="#access">Dashboard</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Meeting Manager<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Presentations</a></li>
                        <li><a href="/settings">Settings</a> </li>
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
                <li role="presentation" class="active"><a href="#access">User Access Level</a></li>
                <li role="presentation"><a href="#reminder">Reminder Period</a></li>
                <li role="presentation" ><a href="#meeting">Meeting Date</a></li>
            </ul>
        </div>
        <div class="col-sm-9">

            <div ng-view></div>

            <script type = "text/ng-template" id = "access.htm">
                <div class="settings">
                    <h4>Modify the Access Level for a User</h4>
                    <form role="form">
                        <div class="form-group">
                            <label for="search_user">User Email:</label>
                            <input type="text" class="form-control" id="search_user" name="search_user">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    <div>
                        <h5>Search Results</h5>

                    </div>
                    <form role="form">
                        <div class="form-group">
                            <label for="access">Access Level:</label>
                            <select class="form-control" id="access" name="access">
                                <option value="0">Admin</option>
                                <option value="1">Manager</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </script>

            <script type = "text/ng-template" id = "reminder.htm">
                <div class="settings">
                    <h4>Set the numbers of days to remind Presenter before Event date</h4>
                    <form role="form">
                        <div class="form-group">
                            <label for="days">Number in Days:</label>
                            <input type="number" class="form-control" id="days" name="days">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </script>

            <script type = "text/ng-template" id = "meeting.htm">
                <div class="settings">
                    <h4>Move a set meeting to another off-schedule date</h4>

                    <form role="form">
                        <div class="form-group">
                            <label for="search_meeting">Meeting Date:</label>
                            <input type="text" class="form-control" id="search_meeting" name="search_meeting">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <div>
                        <h5>Search Results</h5>
                    </div>
                    <form role="form">
                        <div class="form-group">
                            <label for="date">New Date:</label>
                            <input type="number" class="form-control" id="date" name="date">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </script>
        </div>
    </div>
</div>
<div>

</div>

<script>
    var dashboardApp = angular.module("dashboardApp", ['ngRoute']);
    dashboardApp.config(['$routeProvider', function($routeProvider) {
        $routeProvider.

            when('/access', {
                templateUrl: 'access.htm',
                controller: 'accessController'
            }).

            when('/reminder', {
                templateUrl: 'reminder.htm',
                controller: 'reminderController'
            }).

            when('/meeting', {
                templateUrl: 'meeting.htm',
                controller: 'meetingController'
            }).

            otherwise({
                redirectTo: '/access'
            });
    }]);

    mainApp.controller('accessController', function($scope) {
    });

    mainApp.controller('reminderController', function($scope) {
    });

    mainApp.controller('meetingController', function($scope) {
    });

</script>

</body>
</html>