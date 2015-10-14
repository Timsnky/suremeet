<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 14/10/2015
 * Time: 4:33 PM
 */

namespace SureMeet\Tags;

use Eloquent;

class Tag extends Eloquent {

    protected $table  = 'tags';

    protected $fillable = ['tag'];

    protected $gaurded = ['id', 'created_at', 'updated_at'];

    public function meetingTags()
    {
        return $this->hasMany('SureMeet\Meetings\Meeting');
    }
}