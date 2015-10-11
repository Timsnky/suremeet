<?php 
$I = new FunctionalTester($scenario);

$I->am('A SureMeet Member');
$I->wantTo('Login to my SureMeet Account');

$I->signIn();

$I->seeCurrentUrlEquals('/');
$I->see('Welcome');