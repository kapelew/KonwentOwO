<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('index', 'DefaultController');
Routing::get('homePage', 'DefaultController');
Routing::get('signUp', 'DefaultController');
Routing::get('account', 'DefaultController');
Routing::get('bookmarks', 'DefaultController');
Routing::get('calendar', 'DefaultController');
Routing::get('search', 'DefaultController');
Routing::post('login', 'SecurityController');


Routing::run($path);