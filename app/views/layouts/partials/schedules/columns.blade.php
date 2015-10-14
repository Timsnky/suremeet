<div class="schedules">
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



