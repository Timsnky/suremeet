@extends('layouts.default')

@section('content')
    <div class="container" ng-app="dashboardApp">
        <p> [[ message ]]</p>
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

                <script type="text/javascript" src="angular/dashboard/datepicker.js"></script>

                <script type = "text/ng-template" id = "access.htm">
                    @include('layouts.partials.dashboard.access')
                </script>

                <script type = "text/ng-template" id = "reminder.htm">
                    @include('layouts.partials.dashboard.reminder')
                </script>

                <script type = "text/ng-template" id = "meeting.htm">
                    @include('layouts.partials.dashboard.meeting_date')
                </script>
            </div>
        </div>
    </div>

    <script src="angular/dashboard/dashboardControllers.js"></script>
@stop