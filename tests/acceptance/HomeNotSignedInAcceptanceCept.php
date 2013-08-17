<?php
$I = new WebGuy($scenario);
$I->wantTo("go to my home page when I haven't signed in");
$I->lookForwardTo('being shown the sign in form');
$I->amOnPage('/home');
$I->seeInCurrentUrl('/signin');
$I->see('Please sign in');
