<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['Nie ma takiego uzytkownika!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['Uzytkownik z takim mailem nie istnieje!']]);
        }

        if ($user->getPassword() !== md5($password)) {
            return $this->render('login', ['messages' => ['Wprowadz poprawne haslo!']]);
        }

        $_SESSION['user'] = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'name' => $user->getName(),
        ];

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/homePage");
    }

    public function signUp()
    {
        if (!$this->isPost()) {
            return $this->render('signUp');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('signUp', ['messages' => ['Wprowadz poprawne haslo']]);
        }

        $user = new User($email, md5($password), $name, $surname);
        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['Udalo ci sie zarejestrowac!']]);
    }

    public function logout() {

        session_destroy();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }
}

