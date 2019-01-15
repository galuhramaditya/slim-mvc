<?php

session_start();

$container = $app->getContainer();

// database
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$container['db'] = function($container) use ($capsule) {
	return $capsule;
};

$container['csrf'] = function() {
	$guard = new Slim\Csrf\Guard;
	return $guard;
};