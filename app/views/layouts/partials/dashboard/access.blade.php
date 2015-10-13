<div class="settings">
    <h4>Modify the Access Level for a User</h4>
    <p> [[ message ]]</p>
    @include('layouts.partials.errors')

    @if(isset($userDetails))
        <div>
            <h5><u>Search Results</u></h5>
            <p>Name: {{ $userDetails->firstname . " " . $userDetails->lastname }} </p>
            <p>Email: {{ $userDetails->email }}</p>
        </div>
        {{ Form::open(['route' => 'access_dashboard_path']) }}
        <div class="form-group">
            {{ Form::label('access', 'Access Level:') }}
            {{ Form::hidden('id', $userDetails->id) }}
            {{ Form::select('access', [0 => 'Admin' , 1 => 'Manager', 2 => 'User'], 2,  ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    @else
        {{ Form::open(['route' => 'access_dashboard_search_path']) }}
        <div class="form-group">
            {{ Form::label('email', 'User Email:') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Search', ['class' => 'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    @endif
</div>