<?php

use SureMeet\Settings\Setting;
use SureMeet\Meetings\Meeting;
use SureMeet\Users\User;

class SchedulesController extends \BaseController
{
    public function create()
    {
        $columns = Setting::where('name' , 'schedules_columns')->first()->setting;
        $meetings = Meeting::all();
        return View::make('pages.schedules', ['columns' => $columns, 'meetings' => $meetings]);
    }

    public function getMeeting()
    {
        $columns = Setting::where('name' , 'schedules_columns')->first()->setting;

        $meetings = Meeting::all()->toArray();
//
//        $meetings = DB::table('meetings')->simplePaginate($columns);

        return View::make('pages.schedules', ['meetings' => $meetings]);
        //$currentDate = \Carbon\Carbon::now();

//        if ($columns == 1){
//            $higherDate = Meeting::where('date', '>', $currentDate)->take(3)->get();
//            return Response::json($higherDate);
//        }
        //$higherDate = Meeting::where('date', '<', $currentDate)->orderBy('date', 'desc')->take(2)->get()
        //$meetings = Meeting::where('user_id', 1)->skip(1)->get();
        //$higherDate;
        //dd($higherDate);

        //$lowerDate = Meeting::orderBy('date', '')->where('date', '<', $higherDate)->take(5)->get();
        //$higherDate = $higherDate->toArray();
        //return Response::json(Meeting::all());
    }
}