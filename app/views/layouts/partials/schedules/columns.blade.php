<div class="schedules">
    <div ng-repeat = "meeting in meetings">
        [[ meeting ]]
    </div>
    <table>
        <tr>
            @for($i = 0; $i < $columns; $i ++)
                <td>
                    @include('layouts.partials.schedules.table')
                </td>
            @endfor
        </tr>
    </table>
</div>



