<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 12/10/2015
 * Time: 4:46 PM
 */

namespace SureMeet\Forms;


use Laracasts\Validation\FormValidator;

class ReminderDaysForm extends FormValidator
{
    protected $rules = [
      'days' => 'required | integer'
    ];
}