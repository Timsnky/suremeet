<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/9/15
 * Time: 3:47 PM
 */

namespace SureMeet\SignUp;


class SignUpCommand
{
    public $firstname;
    public $lastname;
    public $email;
    public $organisation;
    public $password;

    /**
     * SignUpCommand constructor.
     * @param $firstname
     * @param $lastname
     * @param $email
     * @param $organisation
     * @param $password
     * @param $remember_token
     */
    public function __construct($firstname, $lastname, $email, $organisation, $password)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->organisation = $organisation;
        $this->password = $password;
    }
}