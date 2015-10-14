<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 14/10/2015
 * Time: 12:32 AM
 */

namespace SureMeet\Downloads;

use Eloquent;

class Download extends Eloquent {

    protected $table  = 'downloads';

    protected $fillable = ['name', 'path', 'meeting_id'];

    protected $gaurded = ['id', 'created_at', 'updated_at'];

    public function meeting() {
        return $this->belongsTo('SureMeet\Meetings\Meeting');
    }
}