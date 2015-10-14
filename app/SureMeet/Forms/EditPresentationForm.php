<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/10/15
 * Time: 4:04 PM
 */

namespace SureMeet\Forms;

use Laracasts\Validation\FormValidator;

class EditPresentationForm extends FormValidator
{
    protected $rules = [
        'title' => 'required',
        'abstract' => 'required',
    ];
}