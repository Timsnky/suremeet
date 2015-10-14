<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 14/10/2015
 * Time: 12:36 AM
 */

namespace SureMeet\Forms;


use Laracasts\Validation\FormValidator;

class UploadsForm extends FormValidator
{
    protected $rules = [
        'attachment' => 'required',
    ];
}