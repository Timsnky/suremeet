{{--<div class="schedules">--}}
    {{--<p> [[ message ]]</p>--}}
    {{--<div ng-repeat = "meeting in meetings">--}}
        {{--<p>[[ meeting ]]</p>--}}
    {{--</div>--}}
    {{--<table>--}}
        {{--<tr>--}}
            {{--@for($i = 0; $i < $columns; $i ++)--}}
                {{--<td>--}}
                    {{--@include('layouts.partials.schedules.table')--}}
                {{--</td>--}}
            {{--@endfor--}}
        {{--</tr>--}}
    {{--</table>--}}
{{--</div>--}}

<div class="schedules">
    @foreach ($meetings as $meeting)
        <p> {{ $meeting->date }}</p>
    @endforeach
</div>

{!! $meetings->render() !!}