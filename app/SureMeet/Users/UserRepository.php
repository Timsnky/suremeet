<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/9/15
 * Time: 4:17 PM
 */

namespace SureMeet\Users;


class UserRepository
{
    public function save (User $user)
    {
        return $user->save();
    }
}