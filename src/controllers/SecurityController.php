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

        if (!password_verify($password,$user->getPassword())) {
            return $this->render('login', ['messages' => ['Wprowadz poprawne haslo!']]);
        }

        $_SESSION['user'] = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'name' => $user->getName(),
            'pictureId' => $user->getPictureId(),
            'created_at' => $user->getCreatedAt()
        ];

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/events");
    }

    public function signUp()
    {
        if (!$this->isPost()) {
            return $this->render('signUp');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if($this->userRepository->getUser($email)) {
            return $this->render('signup', ['messages' => ['Podany email jest juz uzywany!']]);
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $user = new User($email, $hashedPassword, $name, $surname);
        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['Udalo ci sie zarejestrowac!']]);
    }

    public function logout() {

        session_destroy();
        $this->render('login', ['messages' => ['Pomyslnie wylogowano']]);
    }
}

