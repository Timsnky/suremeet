<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 12/10/2015
 * Time: 9:20 AM
 */

namespace SureMeet\Settings;

use Eloquent;

class Setting extends Eloquent {

    protected $table  = 'settings';

    protected $fillable = ['setting'];

    protected $gaurded = ['id', 'created_at', 'updated_at'];

}