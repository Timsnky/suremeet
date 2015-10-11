<?php

class DashboardController extends \BaseController {

	public function create()
    {
        return View::make('pages.dashboard');
    }
}
