<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/10/15
 * Time: 4:50 PM
 */

namespace SureMeet\Meetings\Events;


use SureMeet\Meetings\Meeting;

class MeetingRegistered
{
    public $meeting;

    /**
     * MeetingRegistered constructor.
     * @param $meeting
     */
    public function __construct(Meeting $meeting)
    {
        $this->meeting = $meeting;
    }
}