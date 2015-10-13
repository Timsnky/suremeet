@extends('layouts.default')

@section('content')
    <div class="container" ng-app="settingsApp">
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
                    @include('layouts.partials.settings.frequency')
                </script>

                <script type = "text/ng-template" id = "columns.htm">
                    @include('layouts.partials.settings.columns')
                </script>
            </div>
        </div>
    </div>

    <script src="angular/settings/settingsControllers.js"></script>
@stop