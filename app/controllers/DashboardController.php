<?php

use SureMeet\Meetings\Meeting;
use SureMeet\Forms\CurrentMeetingDateForm;
use SureMeet\Forms\NewMeetingDateForm;
use SureMeet\Forms\UserEmailForm;
use SureMeet\Users\User;
use SureMeet\Forms\ReminderDaysForm;
use SureMeet\Settings\Setting;


class DashboardController extends \BaseController {

    public $currentMeetingDateForm;
    public $newMeetingDateForm;
    public $userEmailForm;
    public $reminderDaysForm;
    public $currentDate;
    /**
     * DashboardController constructor.
     * @param $currentMeetingDateForm
     * @param $newMeetingDateForm
     */
    public function __construct(CurrentMeetingDateForm $currentMeetingDateForm,
                                NewMeetingDateForm $newMeetingDateForm,
                                UserEmailForm $userEmailForm, ReminderDaysForm $reminderDaysForm)
    {
        $this->currentMeetingDateForm = $currentMeetingDateForm;
        $this->newMeetingDateForm = $newMeetingDateForm;
        $this->userEmailForm = $userEmailForm;
        $this->reminderDaysForm = $reminderDaysForm;

    }

    public function create()
    {
        return View::make('pages.dashboard');
    }

    public function setAccess()
    {
        User::where('id' , Input::get('id'))->update(['access_level' => Input::get('access')]);

        return View::make('pages.dashboard');

    }

    public function searchUser()
    {
        $this->userEmailForm->validate(Input::all());

        $user = User::where('email', Input::get('email'))->first();

        return View::make('pages.dashboard', array('userDetails' => $user));
    }

    public function setReminder()
    {
        $this->reminderDaysForm->validate(Input::all());

        Setting::where('name' , 'reminder_days')->update(['setting' => Input::get('days')]);

        return Redirect::to('dashboard');
    }

    public function searchMeeting()
    {
        $this->currentMeetingDateForm->validate(Input::all());

        $currentDate = Carbon::createFromFormat('d/m/Y', Input::get('current_date'))->startOfDay();

        $meeting = Meeting::where('date', $currentDate)->first();

        return View::make('pages.dashboard', array('meetingDetails' => $meeting));
    }

    public function setMeetingDate()
    {
        $this->newMeetingDateForm->validate(Input::all());
        $currentDate = Carbon::createFromFormat('Y-m-d', Input::get('current_date'));
        $currentDate->startOfDay();

        $date = Carbon::createFromFormat('d/m/Y', Input::get('new_date'));
        $date->startOfDay();

        Meeting::where('date', '=', $currentDate)->update(['date' => $date]);

        return Redirect::to('dashboard');
    }
}
