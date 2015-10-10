<?php namespace SureMeet\Forms;

use Laracasts\Validation\FormValidator;


class SignUpForm extends FormValidator
{
    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required | email | unique:users',
        'organisation' => 'required',
        'password' => 'required | confirmed'
    ];
}