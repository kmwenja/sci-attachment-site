<?php

require_once('views/welcome.php');
require_once('views/session.php');

$app->get('/home', 'home')->name('home');
$app->post('/signin', 'signin')->name('signin');
$app->get('/signin', 'signin_form')->name('signin_form');
$app->get('/welcome', 'welcome');
$app->get('/', 'welcome')->name('welcome');