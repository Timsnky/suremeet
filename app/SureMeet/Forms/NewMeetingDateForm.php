<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 12/10/2015
 * Time: 3:03 PM
 */

namespace SureMeet\Forms;


use Laracasts\Validation\FormValidator;

class NewMeetingDateForm extends FormValidator
{
    protected $rules = [
        'new_date' => 'required'
    ];
}