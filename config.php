<?php

// configurations - requires Slim $app object

$app->config('templates.path', 'templates');
$app->config('debug', 'true');

require_once 'vendor/slim/extras/Slim/Extras/Views/Twig.php';

\Slim\Extras\Views\Twig::$twigExtensions = array(
    'Twig_Extensions_Slim',
);

$app->view(new \Slim\Extras\Views\Twig());

// extensions to Twig Templating system

// this adds Slims's urlFor function to Twig templating
$env = $app->view()->getEnvironment();

$urlFor = new Twig_SimpleFunction('urlFor', function ($url, $data=null) use($app) {
    if(is_array($data)){
        return $app->urlFor($url,$data);
    } else {
        return $app->urlFor($url);
    }
});

$env->addFunction($urlFor);

$sessionData = new Twig_SimpleFunction('sessionData', function($key) use($app){
	if(array_key_exists($key, $_SESSION)){
		return $_SESSION[$key];
	}
	return null;
});

$env->addFunction($sessionData);

require_once('db.config.php');

ORM::configure('mysql:host='.$_db_host.';dbname='.$_db_name);
ORM::configure('username', $_db_username);
ORM::configure('password', $_db_password);