<?php

require_once('views/welcome.php');

$app->get('/', 'welcome')->name('welcome');
