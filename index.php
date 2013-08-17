<?php

session_start();

require_once('vendor/autoload.php');

$app = new \Slim\Slim();

require_once('config.php');

require_once('routes.php');

$app->run();