<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/9/15
 * Time: 4:08 PM
 */

namespace SureMeet\SignUp\Events;

use SureMeet\Users\User;

class UserSignedUp
{
    public $user;

    public function __construct (User $user)
    {
        $this->user = $user;
    }
}