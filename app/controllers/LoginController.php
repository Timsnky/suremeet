<?php

use SureMeet\Forms\LoginForm;

class LoginController extends \BaseController {

    public $loginForm;

    /**
     * LoginController constructor.
     * @param $loginForm
     */
    public function __construct(LoginForm $loginForm)
    {
        $this->loginForm = $loginForm;

        $this->beforeFilter('guest', ['except' => 'destroy']);
    }


    public function create()
	{
        return View::make('pages.login');
	}

	public function check()
	{
        $input = Input::only('email', 'password');

        $this->loginForm->validate($input);

        if (Auth::attempt($input))
        {
            Flash::message("Welcome");

            return Redirect::intended('/');
        }
        else{

            return Redirect::back()->withErrors(['Invalid Username or Password']);
        }
	}

    public function destroy ()
    {
        Auth::logout();

        Flash::message("You have been logged out");

        return Redirect::home();
    }
}
