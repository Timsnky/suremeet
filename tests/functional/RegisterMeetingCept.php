<?php
$I = new FunctionalTester($scenario);

$I->wantTo('Register to Make a Presentation');
$I->amOnPage('/register_presentation');


$I->selectOption('date', '2015-11-12');
$I->fillField('Title:', 'Computer');
$I->fillField('Abstract:', 'Technology');
$I->click('Save');

$I->seeRecord('meetings', [
    'title' => 'Technology'
]);

