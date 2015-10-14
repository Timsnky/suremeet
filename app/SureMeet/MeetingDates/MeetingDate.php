<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 14/10/2015
 * Time: 9:12 PM
 */

namespace SureMeet\MeetingDates;

use Eloquent;

class MeetingDate extends Eloquent {

    protected $table  = 'meeting_dates';

    protected $fillable = ['date'];

    protected $gaurded = ['id', 'created_at', 'updated_at'];

}