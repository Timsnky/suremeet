<?php

use SureMeet\Forms\RegisterPresentationForm;
use \SureMeet\Core\CommandBus;
use SureMeet\RegisterPresentation\RegisterPresentationCommand;

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


    public function create()
    {
       return View::make('pages.register_presentation');
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
          new RegisterPresentationCommand($date, $title, $abstract, $shareable, $currentUser->id)
        );

        Flash::message("Meeting Saved Successfully");

        return Redirect::home();
    }
}
