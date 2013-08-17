<?php

function signin_form(){
	$app = \Slim\Slim::getInstance();
	$app->render('signin.html.twig');
}

function signin(){
	$app = \Slim\Slim::getInstance();

	$username = $app->request()->post('username');
	$password = $app->request()->post('password');

	$users = ORM::for_table('user')->where('username', $username)->find_many();

	if(count($users) !== 1){
		$app->flash('error','invalid account');
		$app->redirect($app->urlFor('signin_form'));
		return;
	}

	if($users[0]->password !== $password){
		$app->flash('error', 'invalid password');
		$app->redirect($app->urlFor('signin_form'));
		return;
	}

	$_SESSION['username'] = $users[0]->username;
	$_SESSION['name'] = $users[0]->name;
	$_SESSION['signed_in'] = True;

	$app->redirect($app->urlFor('home'));
}

function home(){
	$app = \Slim\Slim::getInstance();
	$app->render('home.html.twig');
}