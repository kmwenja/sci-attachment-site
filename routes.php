<?php

require_once('views/welcome.php');

$app->get('/welcome', 'welcome');
$app->get('/', 'welcome')->name('welcome');