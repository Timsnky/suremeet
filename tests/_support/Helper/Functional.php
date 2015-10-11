<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Laracasts\TestDummy\Factory as TestDummy;


class Functional extends \Codeception\Module
{
    public function haveAnAccount($overrides = [])
    {
         TestDummy::create('SureMeet\Users\User', $overrides);

    }

    public function signIn()
    {
        $email = 'foo@example.com';
        $password = 'foo';

        $this->haveAnAccount(compact('email', 'password'));

        $I = $this->getModule('Laravel4');

        $I->amOnPage('/login');
        $I->fillField('email', $email);
        $I->fillField('password', $password);
        $I->click('Login');
    }
}
