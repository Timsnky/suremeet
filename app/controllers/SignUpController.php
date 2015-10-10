<?php

use SureMeet\Forms\SignUpForm;
use SureMeet\Core\CommandBus;
use SureMeet\SignUp\SignUpCommand;



class SignUpController extends \BaseController {

	use CommandBus;

	private $signUpForm;

	/**
	 * SignUpController constructor.
	 * @param $signUpForm
	 */
	public function __construct(SignUpForm $signUpForm)
	{
		$this->signUpForm = $signUpForm;

		//$this->beforeFilter('guest');
	}


	public function create()
	{
        return View::make('pages.signup');
	}

	public function store()
	{
		$this->signUpForm->validate(Input::all());

		extract(Input::only('firstname', 'lastname', 'email', 'organisation',
			'password'));

		$user = $this->execute(
			new SignUpCommand($firstname, $lastname, $email, $organisation,
				$password)
		);

		Auth::login($user);

		Flash::success('You Have Successfully Logged In');

		return Redirect::home();
	}
}
