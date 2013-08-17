<?php

require_once('views/welcome.php');
require_once('views/session.php');

$app->get('/signin', 'signin_form')->name('signin_form');
$app->get('/welcome', 'welcome');
$app->get('/', 'welcome')->name('welcome');