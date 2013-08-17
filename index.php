<?php

require_once('vendor/autoload.php');

$app = new \Slim\Slim();

require_once('config.php');

$app->get('/', function() use($app){
	$app->render('index.html');
});

$app->run();