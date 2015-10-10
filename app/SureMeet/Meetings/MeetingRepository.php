<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/10/15
 * Time: 4:37 PM
 */

namespace SureMeet\Meetings;


class MeetingRepository
{
    public function save(Meeting $meeting)
    {
        return $meeting->save();
    }

}