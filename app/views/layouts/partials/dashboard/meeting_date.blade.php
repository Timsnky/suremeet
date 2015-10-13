<div class="settings">
    <h4>Move a set meeting to another off-schedule date</h4>

    @include('layouts.partials.errors')

    @if(isset($meetingDetails))
        <div>
            <h5><u>Search Results</u></h5>
            <p>Date: {{ $meetingDetails->date }} </p>
            <p>Title: {{ $meetingDetails->title }}</p>
            <p>Speaker:</p>
        </div>
        {{ Form::open(['route' => 'meeting_dashboard_path']) }}
        <div class="form-group">
            {{ Form::label('new_date', 'New Date:') }}
            {{ Form::hidden('current_date', $meetingDetails->date) }}
            {{ Form::text('new_date', null, ['placeholder' => 'dd/mm/yyyy', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    @else
        {{ Form::open(['route' => 'meeting_dashboard_search_path']) }}
        <div class="form-group">
            {{ Form::label('current_date', 'Current Meeting Date:') }}
            {{ Form::text('current_date', null, ['placeholder' => 'dd/mm/yyyy', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Search', ['class' => 'btn btn-primary'])}}
        </div>
        {{ Form::close() }}
    @endif

</div>


