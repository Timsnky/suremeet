@extends('layouts.default')

@section('content')

    <h3>Edit your Presentation</h3>
    <div class="register">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials.errors')
                {{ Form::open(['route' => 'edited_presentation_path', 'files' => true]) }}

                <div class="form-group">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', $meeting->title, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('abstract', 'Abstract:') }}
                    {{ Form::textarea('abstract', $meeting->abstract,  ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('notes', 'Notes:') }}
                    {{ Form::textarea('notes', $meeting->notes,  ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('shareable', 'Allow People to Share: ')}}
                    {{ Form::hidden('shareable', false) }}
                    {{ Form::checkbox('shareable', true , $meeting->shareable)}}
                </div>

                <div class="form-group">
                    {{ Form::label('tag', 'Tags:') }}
                    {{ Form::text('tag', @foreach($meeting->tags-), ['placeholder' => 'please separate the tags with a ; ie tag;tag','class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::hidden('id', $meeting->id) }}
                    {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop