<?php

require __DIR__ . "/../vendor/autoload.php";

$env = Dotenv\Dotenv::create(__DIR__, '../.env');
$env->load();

$app = new Slim\App([
	'settings' => [
		'displayErrorDetails' => true,
		'db' => [
			'driver' => getenv('driver'),
			'host' => getenv('host'),
			'database' => getenv('database'),
			'username' => getenv('username'),
			'password' => getenv('password'),
			'charset' => getenv('charset'),
			'collaction' => getenv('collaction'),
			'prefix' => getenv('previx')
		],
	]
]);