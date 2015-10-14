<div class="container">
    <table class="main_table">
        @foreach($meetings as $meeting)
            <tr>
                <td>
                    <div class="col-sm-10">
                        <p><b>Date</b> {{ $meeting->date }}</p>
                        <p><b>Title:</b> {{ $meeting->title }} <b>Speaker Name:</b> {{  $meeting->user->firstname . ' ' . $meeting->user->lastnam}}</p>
                        <p><b>Organisation:</b> {{ $meeting->user->organisation }} <b>Email:</b> {{ $meeting->user->email }}</p>
                        <p><b>Abstract</b> {{ $meeting->abstract }}</p>
                    </div>
                    <div class="col-sm-2">
                        <p>{{ link_to_route('meeting_details_path', 'View More', ['meeting_id' => $meeting->id] ) }}</p>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</div>
