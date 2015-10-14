@extends('layouts.default')

@section('content')

    <h3>Upload an Attachment for the Presentation</h3>
    <div class="register">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials.errors')
                {{ Form::open(['route' => 'add_attachment_presentation', 'files' => true]) }}
                <div class="form-group">
                    {{ Form::hidden('meeting_id', $meeting->id) }}
                    {{ Form::label('attachment', 'Attachment:') }}
                    {{ Form::file('attachment', ['class' => 'field'])  }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Upload', ['class' => 'btn btn-primary'])}}
                </div>

                {{ Form::reset('Reset') }}

                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop