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
                <b>Speaker Name:</b> {{ $meeting->title }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Organization:</b> {{ $meeting->title }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Speaker Email:</b> {{ $meeting->title }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Abstract:</b> {{ $meeting->abstract }}
            </td>
        </tr>
    </table>
@endforeach
