<div class="settings">
    <h4>Set the numbers of days to remind Presenter before Event date</h4>

    {{ Form::open(['route' => 'reminder_dashboard_path']) }}
    <div class="form-group">
        {{ Form::label('days', 'Number of Days:') }}
        {{ Form::number('days', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
    </div>
    {{ Form::close() }}
</div>