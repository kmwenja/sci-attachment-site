<?php

function welcome(){
	$app = \Slim\Slim::getInstance();
	$app->render('index.html');
}