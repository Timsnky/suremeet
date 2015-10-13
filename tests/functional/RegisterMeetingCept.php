<?php 
$I = new FunctionalTester($scenario);

$I->wantTo('Register to Make a Presentation');
$I->amOnPage('/register_presentation');


$I->selectOption('date', 'Oct 12, 2015');
$I->fillField('Title:', 'Computer');
$I->fillField('Abstract:', 'Technology');
$I->click('Save');

$I->seeRecord('meetings', [
    'title' => 'Technology',
    'user_id' => Auth::user()->id
]);

