<?php namespace SureMeet\Meetings ;

use Eloquent;
use SureMeet\Users\User;
use Laracasts\Commander\Events\EventGenerator;
use SureMeet\Meetings\Events\MeetingRegistered;

class Meeting extends Eloquent {

    use EventGenerator;

    protected $table  = 'meetings';

	protected $fillable = ['date', 'title', 'abstract',
        'notes', 'shareable', 'user_id'];

    protected $gaurded = ['id', 'created_at', 'updated_at'];

    public static function register ($date, $title, $abstract, $shareable, $user_id)
    {
        $meeting = new static( compact('date', 'title', 'abstract', 'shareable', 'user_id'));

        $meeting->raise( new MeetingRegistered($meeting));

        return $meeting;
    }

    public function user()
    {
        return $this->belongsTo('SureMeet\Users\User');
    }

    public function downloads()
    {
        return $this->hasMany('SureMeet\Downloads\Download');
    }
}