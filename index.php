<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('index', 'DefaultController');
Router::get('events', 'EventController');
Router::get('event', 'EventController');
Router::get('signUp', 'DefaultController');
Router::get('addEvent', 'DefaultController');
Router::get('searchEngine', 'DefaultController');
Router::get('account', 'DefaultController');
Router::get('bookmarks', 'BookmarksController');
Router::get('calendar', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('signUp', 'SecurityController');
Router::post('addEvent', 'EventController');
Router::post('logout', 'SecurityController');
Router::post('search','EventController');
Router::post('addToBookmarks', 'BookmarksController');
Router::post('removeFromBookmarks', 'BookmarksController');


Router::run($path);