@foreach($meetings as $meeting)
    <table class="main_table">
        <tr>
            <td>
                <b>Date:</b> {{ $meeting->date }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Title:</b> {{ $meeting->title }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Speaker Name:</b> {{ $meeting->user->firstname . ' ' . $meeting->user->lastname}}
            </td>
        </tr>
        <tr>
            <td>
                <b>Organization:</b> {{ $meeting->user->organisation }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Speaker Email:</b> {{ $meeting->user->email }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Abstract:</b> {{ $meeting->abstract }}
            </td>
        </tr>
    </table>
@endforeach
