<?php namespace SureMeet\Users;


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Support\Facades\Hash;
use Eloquent;
use Laracasts\Commander\Events\EventGenerator;
use SureMeet\SignUp\Events\UserSignedUp;


class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $gaurded = ['id', 'created_at', 'updated_at'];

	protected $fillable = ['firstname', 'lastname', 'email', 'organisation', 'password'];

	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}

	public static function register ($firstname, $lastname, $email, $organisation, $password)
	{
		$user = new static( compact('firstname', 'lastname', 'email', 'organisation', 'password'));

		$user->raise( new UserSignedUp($user));

		return $user;
	}

}
