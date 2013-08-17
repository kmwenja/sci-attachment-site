<?php

class UserSessionController
{
	protected $app;

	public function __construct()
	{
		$this->app = \Slim\Slim::getInstance();
	}

	public function signin_form()
	{
		if(($_SESSION and isset($_SESSION['signed_in']) and $_SESSION['signed_in'] === True)){
			$this->app->redirect($this->app->urlFor('home'));
			return;
		}
		
		$this->app->render('signin.html.twig');
	}

	public function signin()
	{
		$username = $this->app->request()->post('username');
		$password = $this->app->request()->post('password');

		$users = ORM::for_table('user')->where('username', $username)->find_many();

		if(count($users) !== 1){
			$this->app->flash('error','invalid account');
			$this->app->redirect($this->app->urlFor('signin_form'));
			return;
		}

		if($users[0]->password !== $password){
			$this->app->flash('error', 'invalid password');
			$this->app->redirect($this->app->urlFor('signin_form'));
			return;
		}

		$_SESSION['username'] = $users[0]->username;
		$_SESSION['name'] = $users[0]->name;
		$_SESSION['signed_in'] = True;

		$this->app->redirect($this->app->urlFor('home'));
	}

	public function home()
	{
		if(!($_SESSION and isset($_SESSION['signed_in']) and $_SESSION['signed_in'] === True)){
			$this->app->redirect($this->app->urlFor('signin_form'));
			return;
		}

		$this->app->render('home.html.twig');
	}

	public function signout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['name']);
		unset($_SESSION['signed_in']);

		session_destroy();

		$this->app->redirect($this->app->urlFor('signin_form'));
	}
}
