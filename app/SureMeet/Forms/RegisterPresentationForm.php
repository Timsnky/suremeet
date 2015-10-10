<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/10/15
 * Time: 4:04 PM
 */

namespace SureMeet\Forms;

use Laracasts\Validation\FormValidator;

class RegisterPresentationForm extends FormValidator
{
    protected $rules = [
        'date' => 'required | unique:meetings',
        'title' => 'required',
        'abstract' => 'required',
    ];
}