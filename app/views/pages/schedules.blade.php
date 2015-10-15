@extends('layouts.schedules')

@section('content')
    @include('layouts.partials.nav')
    @include('flash::message')
    <div ng-app="schedulesApp">
        <div class="container" >
            <div class="row">
                <div class="col-sm-8">
                    <form class="form-horizontal">
                        <div class="form-group">
                            {{ Form::label('search_parameter', 'Search By:') }}
                            {{ Form::select('search_parameter', [1 => 'Presenter', 2 => 'Title',
                            3 => 'Abstract', 4 => 'Meeting Tags'], null,  ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group ">
                            {{ Form::text('search', null, ['placeholder' => 'Search', 'class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Search', ['class' => 'btn btn-primary'])}}
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="schedules">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#columns">ColumnView</a></li>
                    <li role="presentation" class="active"><a href="#list">ListView</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div ng-view></div>

                <script type = "text/ng-template" id = "columns.htm">
                    @include('layouts.partials.schedules.columns')
                </script>

                <script type = "text/ng-template" id = "list.htm">
                    @include('layouts.partials.schedules.list')
                </script>
            </div>
        </div>
    </div>

    <script src="angular/schedules/schedules.js"></script>
@stop