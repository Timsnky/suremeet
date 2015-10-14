<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 14/10/2015
 * Time: 1:03 AM
 */

namespace SureMeet\Forms;


use Laracasts\Validation\FormValidator;

class UploadsFormName extends FormValidator
{
    protected $rules = [
        'filename' => 'required'
    ];
}