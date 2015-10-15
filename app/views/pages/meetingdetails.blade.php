@extends('layouts.default')


@section('content')
    <h3>Meeting Information</h3>
    <div class="register">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials.errors')
                <p><b>Date:</b> {{ $meeting->date }}</p>
                <p><b>Title:</b> {{ $meeting->title }}</p>
                <p><b>Speaker Name:</b> {{ $meeting->user->firstname . ' ' . $meeting->user->lastname }}</p>
                <p><b>Speaker Organisation:</b> {{ $meeting->user->organisation }}</p>
                <p><b>Speaker Email:</b> {{ $meeting->user->email }}</p>
                <p><b>Abstract:</b></p>
                <p>{{ $meeting->abstract }}</p>
                @if($meeting->notes != '')
                    <p><b>Notes:</b></p>
                    <p>{{ $meeting->notes }}</p>
                @endif
                @if(! $meeting->downloads->isEmpty())
                    <p><b>Downloads</b></p>
                @endif
                <ul>
                    @foreach($meeting->downloads as $download)
                        <li>{{ link_to_route('file_downloads_path', $download->name, ['id' => $download->id])}}</li>
                    @endforeach
                </ul>
                @if(isset($currentUser) && $currentUser->access_level < 2)
                    <h4>Add Notes for the Presentation</h4>
                    {{ Form::open(['route' => 'addnotes_meeting_details_path']) }}
                    <div class="form-group">
                        {{ Form::label('notes', 'Notes:') }}
                        {{ Form::hidden('id', $meeting->id) }}
                        {{ Form::textarea('notes', $meeting->notes,  ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
                    </div>
                    {{ Form::close() }}
                @endif
            </div>
        </div>
    </div>
@stop