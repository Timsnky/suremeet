<?php

class SchedulesController extends \BaseController
{

    public function create()
    {
        return View::make('pages.schedules', ['name' => Auth::user()->firstname]);
    }

}