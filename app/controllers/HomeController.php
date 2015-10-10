<?php

use SureMeet\Users\User;

class HomeController extends \BaseController {

	public function create()
	{
		return View::make('pages.home');
	}
}
