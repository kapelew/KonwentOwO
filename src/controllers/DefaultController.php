<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function  index(){
        //display login.php
        $this->render('login');

    }

    public function account(){
        if(empty($_SESSION['user'])) {
            $this->render('login', ['messages' => ['Zaloguj sie aby kontynuowac']]);
            exit();
        }
        $this->render('account');
    }

    public function signUp(){
        $this->render('signUp');
    }

    public function searchEngine(){
        $this->render('searchEngine');
    }


    public function addEvent()
    {
        if ($_SESSION['user']['role'] !== 'admin') {
            header("Location: /home");
            exit();
        }
        $this->render("addEvent");
    }

}