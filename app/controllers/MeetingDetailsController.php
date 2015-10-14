<?php

use SureMeet\Meetings\Meeting;
use SureMeet\Downloads\Download;

class MeetingDetailsController extends \BaseController {

	public function create()
    {
        $meeting_id = Input::get('meeting_id');
        $meeting = Meeting::find($meeting_id);
        return View::make('pages.meetingdetails', ['meeting' => $meeting]);
    }

    public function getDownload()
    {
        $fileId = Input::get('id');
        $file = Download::find($fileId);

        if(file_exists($file->path))
        {
            return Response::download($file->path, $file->name, [
               'Content-Length:' . filesize($file->path)
            ]);
        }
        else
        {
            Flash::error("Download File Does Not Exist");
            return Redirect::back();
        }
    }

    public function addNotes()
    {
        Meeting::find(Input::get('id'))->update(['notes' => Input::get('notes')]);
    }
}
