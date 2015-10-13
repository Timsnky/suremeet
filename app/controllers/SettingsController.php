<?php

use SureMeet\Forms\FrequencySettingsForm;
use SureMeet\Settings\Setting;

class SettingsController extends \BaseController {

    public $frequencySettingsForm;

    /**
     * SettingsController constructor.
     * @param $frequencySettingsForm
     * @param $columnsSettingsForm
     */
    public function __construct(FrequencySettingsForm $frequencySettingsForm)
    {
        $this->frequencySettingsForm = $frequencySettingsForm;
    }


    public function create()
    {
        return View::make('pages.settings');
    }

    public function setFrequency()
    {
        $this->frequencySettingsForm->validate(Input::all());
        Setting::where('name', '=', 'meeting_frequency')->update(['setting' => Input::get('days')]);

        return Redirect::to('settings');
    }

    public function setColumns()
    {
        Setting::where('name', '=', 'schedules_columns')->update(['setting' => Input::get('columns')]);

        return Redirect::to('settings');
    }
}
