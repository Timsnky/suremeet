<?php

use SureMeet\Forms\RegisterPresentationForm;
use SureMeet\Core\CommandBus;
use SureMeet\RegisterPresentation\RegisterPresentationCommand;
use SureMeet\Tags\Tag;
use SureMeet\Tags\MeetingTag;
use SureMeet\Meetings\Meeting;
use SureMeet\MeetingDates\MeetingDate;
use Carbon\Carbon;
use SureMeet\Settings\Setting;

class RegisterPresentationController extends \BaseController {

    use CommandBus;

    public $registerPresentationForm;

    /**
     * RegisterPresentationController constructor.
     * @param $registerPresentationForm
     */
    public function __construct(RegisterPresentationForm $registerPresentationForm)
    {
        $this->registerPresentationForm = $registerPresentationForm;
    }

    public function getDates()
    {
        $dates = MeetingDate::lists('date');
        $newDates = array();
        foreach($dates as $date)
        {
            $newDates[$date] = $date;
        }
        return $newDates ;
    }

    public function create()
    {
        return View::make('pages.register_presentation', array('dates' => $this->getDates()));
    }

    /**
     * @return mixed
     * @throws \Laracasts\Validation\FormValidationException
     */
    public function store()
    {
        $this->registerPresentationForm->validate(Input::all());

        extract(Input::only('date', 'title', 'abstract', 'shareable'));

        $currentUser = Auth::user();

        $this->execute(
          new RegisterPresentationCommand(Carbon::createFromFormat('Y-m-d',
              $date), $title, $abstract, $shareable, $currentUser->id)
        );

        Flash::message("Meeting Saved Successfully");

        $this->updateDate();

        $meetingId = Meeting::all()->last()->id;

        $this->storeTags(Input::get('tag'), $meetingId);

        return Redirect::home();
    }

    public function updateDate()
    {
        $deletedDate = Carbon::createFromFormat('Y-m-d', Input::get('date'));

        MeetingDate::where('date',Input::get('date'))->delete();

        $lastDate = MeetingDate::orderBy('date', 'asc')->get()->last()->date;

        $lastDate = Carbon::createFromFormat('Y-m-d', $lastDate);

        $frequency = Setting::where('name', 'meeting_frequency')->first()->setting;

        if($deletedDate > $lastDate)
        {
            $newDate = $deletedDate->addDays($frequency * 7);
        }
        else
        {
            $newDate = $lastDate->addDays($frequency * 7);

        }

        MeetingDate::create(['date' => $newDate]);
    }
    public function storeTags($tags, $meetingId)
    {
        $tagsArray = explode(';', $tags);
        for( $i = 0; $i < count($tagsArray); $i ++)
        {
            $existingTag = Tag::where('tag' , $tagsArray[$i])->first();
            $tagId = 0;
            if(! $existingTag)
            {
                $newTag = new Tag();
                $newTag->tag = $tagsArray[$i];
                $newTag->save();
                $tagId = $newTag->id;
            }else{
                $tagId = $existingTag->id;
            }

            MeetingTag::create([
                'tag_id' => $tagId,
                'meeting_id' => $meetingId
            ]);
        }
    }
}
