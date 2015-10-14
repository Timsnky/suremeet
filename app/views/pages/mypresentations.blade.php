@extends('layouts.default')

@section('content')
    <table class="main_table">
    @foreach($meetings as $meeting)
            <tr>
                <td>
                    <div class="col-sm-10">
                        <p><b>Date:</b> {{ $meeting->date }} <b>Title:</b> {{ $meeting->title }}</p>
                        <p><b>Abstract</b> {{ $meeting->abstract }}</p>
                    </div>
                    <div class="col-sm-2">
                        <p>{{ link_to_route('edit_presentations', 'Edit', ['meeting_id' => $meeting->id] ) }}</p>
                        <p>{{ link_to_route('cancel_presentation', 'Cancel', ['meeting_id' => $meeting->id] ) }} </p>
                        <p> {{ link_to_route('add_attachment_presentation', 'Add Attachment', ['meeting_id' => $meeting->id] ) }}</p>
                    </div>
                </td>
            </tr>
    @endforeach
    </table>
@stop