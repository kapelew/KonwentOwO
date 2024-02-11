<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function  index(){
        //display login.php
        $this->render('login');

    }

    public function homePage(){
        //display homePage.php
        $this->render('homePage');
    }

    public function account(){
        $this->render('account');
    }

    public function signUp(){
        $this->render('signUp');
    }

    public function search(){
        $this->render('search');
    }
    public function bookmarks(){
        $this->render('bookmarks');
    }

    public function calendar(){
        $this->render('calendar');
    }
}