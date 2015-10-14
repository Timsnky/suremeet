<?php

use SureMeet\Users\User;
use SureMeet\Meetings\Meeting;
use SureMeet\Forms\EditPresentationForm;
use SureMeet\Forms\UploadsForm;
use SureMeet\Downloads\Download;

class MyPresentationsController extends \BaseController {

    public $editPresentationForm;

    public $uploadForm;

    /**
     * MyPresentationsController constructor.
     * @param $editPresentationForm
     */
    public function __construct(EditPresentationForm $editPresentationForm, UploadsForm $uploadForm)
    {
        $this->editPresentationForm = $editPresentationForm;
        $this->uploadForm = $uploadForm;
    }

    public function create()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $meetings = $user->meeting()->get();
        if($meetings->isEmpty())
        {
            Flash::message("You have not registered for a presentation");

        }
        return View::make('pages.mypresentations', ['meetings' => $meetings]);
    }

    public function edit()
    {
        $meeting_id = Input::get('meeting_id');
        $meeting = Meeting::find($meeting_id);
        return View::make('pages.editpresentation', ['meeting' => $meeting]);
    }

    public function makeEdit()
    {
        $this->editPresentationForm->validate(Input::all());
        Meeting::find(Input::get('id'))->update([
            'title' => Input::get('title'),
            'abstract' => Input::get('abstract'),
            'notes' => Input::get('notes'),
            'shareable' => Input::get('shareable')
        ]);

        return $this->create();
    }

    public function cancel()
    {
        $meeting_id = Input::get('meeting_id');
        $meeting =  Meeting::find($meeting_id);
        Meeting::find($meeting_id)->delete();

        $user = User::where('access_level', 0)->get()->first();


        Mail::send('layouts.partials.email', ['meeting' => $meeting] , function($message) use($user){
            $message->to( $user->email, $user->firstname . ' ' . $user->lastname)->subject("Presentation Cancelled");
        });

        return Redirect::route('mypresentations_path');
    }

    public function addAttachment()
    {
        $meeting_id = Input::get('meeting_id');
        $meeting = Meeting::find($meeting_id);
        return View::make('pages.addattachment', ['meeting' => $meeting]);
    }

    public function uploadAttachment()
    {
        $this->uploadForm->validate(Input::file());

        $meeting_id = Input::get('meeting_id');
        $fileName = Input::file('attachment')->getClientOriginalName();
        $filePath = Input::file('attachment')->move('storage/', Input::file('attachment')->getClientOriginalName());
        Download::create([
            'name' => $fileName,
            'path' => $filePath,
            'meeting_id' => $meeting_id
        ]);

        return Redirect::route('mypresentations_path');
    }
}
