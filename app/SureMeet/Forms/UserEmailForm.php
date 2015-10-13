<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 12/10/2015
 * Time: 4:21 PM
 */

namespace SureMeet\Forms;


use Laracasts\Validation\FormValidator;

class UserEmailForm extends FormValidator
{
    protected $rules = [
        'email' => 'required | email'
    ];
}