<?php

function signin_form(){
	$app = \Slim\Slim::getInstance();
	$app->render('signin.html.twig');
}