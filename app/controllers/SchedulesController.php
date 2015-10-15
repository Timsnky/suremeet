<?php

use SureMeet\Settings\Setting;
use SureMeet\Meetings\Meeting;
use SureMeet\Users\User;

class SchedulesController extends \BaseController
{
    public function create()
    {
        $columns = Setting::where('name' , 'schedules_columns')->first()->setting;
        $meetings = Meeting::simplePaginate(7);
        return View::make('pages.schedules', ['columns' => $columns, 'meetings' => $meetings]);
    }

    public function getMeeting()
    {
        $columns = Setting::where('name' , 'schedules_columns')->first()->setting;

        return Response::json(Meeting::all());
    }
}