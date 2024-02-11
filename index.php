<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('index', 'DefaultController');
Router::get('homePage', 'DefaultController');
Router::get('signUp', 'DefaultController');
Router::get('account', 'DefaultController');
Router::get('bookmarks', 'DefaultController');
Router::get('calendar', 'DefaultController');
Router::get('search', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('signUp', 'SecurityController');


Router::run($path);