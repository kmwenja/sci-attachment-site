<?php
$I = new WebGuy($scenario);
$I->wantTo('sign into home and then try to sign in again');
$I->lookForwardTo('being sent back to home');
$I->amOnPage('/signin');
$I->see('Please sign in');
$I->fillField('username', 'ac');
$I->fillField('password', 'ac');
$I->click('Sign In');
$I->seeInCurrentUrl('/home');
$I->see('Home');
$I->amOnPage('/signin');
$I->seeInCurrentUrl('/home');
$I->see('Home');
