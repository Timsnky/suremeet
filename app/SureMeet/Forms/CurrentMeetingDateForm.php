<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 12/10/2015
 * Time: 3:00 PM
 */

namespace SureMeet\Forms;


use Laracasts\Validation\FormValidator;

class CurrentMeetingDateForm extends FormValidator
{
    protected $rules = [
      'current_date' => 'required'
    ];
}