<?php

use SureMeet\Users\User;

class MyPresentationsController extends \BaseController {

	public function create()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $meetings = $user->meeting()->get();
        return View::make('pages.mypresentations', ['meetings' => $meetings]);
    }

    public function edit()
    {
        dd(I);

    }

    public function cancel()
    {

    }

    public function addAttachments()
    {

    }
}
