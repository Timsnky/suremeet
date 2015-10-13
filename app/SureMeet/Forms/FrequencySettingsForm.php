<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 12/10/2015
 * Time: 9:06 AM
 */

namespace SureMeet\Forms;


use Laracasts\Validation\FormValidator;

class FrequencySettingsForm extends FormValidator
{
    protected $rules = [
        'days' => 'required | integer'
    ];
}