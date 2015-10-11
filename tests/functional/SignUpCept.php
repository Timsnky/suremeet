<?php 
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('sign up for a SureMeet Account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/signup');

$I->fillField('First Name:', 'John');
$I->fillField('Last Name:', 'Doe');
$I->fillField('Email:', 'john@example.com');
$I->fillField('Organisation:', 'Cytonn');
$I->fillField('Password:', 'test');
$I->fillField('Confirm Password:', 'test');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('/');
$I->see('Welcome to SureMeet');
$I->seeRecord('users', [
        'email' => 'john@example.com'
    ]);



