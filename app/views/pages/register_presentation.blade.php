@extends('layouts.default')

@section('content')
    <h3>Register to Make a Presentation</h3>
    <div class="register">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials.errors')
                {{ Form::open(['route' => 'register_presentation_path', 'files' => true]) }}

                <div class="form-group">
                    {{ Form::label('date', 'Meeting Date:') }}
                    {{ Form::select('date', $dates, null,  ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('abstract', 'Abstract:') }}
                    {{ Form::textarea('abstract', null,  ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('shareable', 'Allow People to Share: ')}}
                    {{ Form::hidden('shareable', false) }}
                    {{ Form::checkbox('shareable', true)}}
                </div>

                <div class="form-group">
                    {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop

