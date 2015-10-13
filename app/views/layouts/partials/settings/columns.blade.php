<div class="settings">
    <h4>Set the numbers of schedule columns on display in the Schedules page</h4>

    @include('layouts.partials.errors')
    {{ Form::open(['route' => 'columns_settings_path']) }}
    <div class="form-group">
        {{ Form::label('columns', 'Number of Columns:') }}
        {{ Form::select('columns', [1 => 1 ,3 => 3, 5 => 5 , 7 => 7] , 3 , ['class' => 'form-control'] ) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
    </div>
    {{ Form::close() }}
</div>