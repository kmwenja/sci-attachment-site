<?php

require_once('views/welcome.php');
require_once('views/session.php');

$user_session_controller = new UserSessionController();

$app->get('/signout', 'signout')->name('signout');
$app->get('/home', array($user_session_controller,'home'))->name('home');
$app->post('/signin', array($user_session_controller,'signin'))->name('signin');
$app->get('/signin', array($user_session_controller,'signin_form'))->name('signin_form');
$app->get('/welcome', 'welcome');
$app->get('/', 'welcome')->name('welcome');