<div class="settings">
    <h4>Set the Frequency for holding the meetings</h4>
    @include('layouts.partials.errors')

    {{ Form::open(['route' => 'frequency_settings_path']) }}
    <div class="form-group">
        {{ Form::label('days', 'Number of Days:') }}
        {{ Form::number('days', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
    </div>
    {{ Form::close() }}
</div>
