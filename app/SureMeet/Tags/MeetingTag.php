<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 14/10/2015
 * Time: 4:37 PM
 */

namespace SureMeet\Tags;

use Eloquent;
use SureMeet\Tags\Tag;
use SureMeet\Meetings\Meeting;

class MeetingTag extends Eloquent {

    protected $table  = 'meetings_tags';

    protected $fillable = ['tag_id', 'meeting_id'];

    protected $gaurded = ['id', 'created_at', 'updated_at'];

    public function tag()
    {
        $this->belongsTo('SureMeet\Tags\Tag');
    }

    public function meeting()
    {
        $this->belongsTo('SureMeet\Meetings\Meeting');
    }
}