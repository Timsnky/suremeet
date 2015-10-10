<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/9/15
 * Time: 3:27 PM
 */

namespace SureMeet\Forms;

use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator
{
    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];
}