<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Event.php';
require_once __DIR__.'/../repository/EventRepository.php';
require_once __DIR__ . '/../repository/BookmarksRepository.php';


class EventController extends AppController
{
    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png'];
    const UPLOAD_DIRECTORY = '/../public/img/';
    private $message = [];
    private $eventRepository;
    private $bookmarksRepository;


    public function __construct()
    {
        parent::__construct();
        $this->eventRepository = new EventRepository();
        $this->bookmarksRepository = new BookmarksRepository();


    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            $events = $this->eventRepository->getEventByTitle($decoded['search']);
            echo json_encode($events);

        }else {
            echo json_encode([]);
        }
    }

    public function addEvent()
    {
        if(empty($_SESSION['user'])) {
            $this->render('login', ['messages' => ['Log in to continue']]);
            exit();
        }

        if ($this->isPost()) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            $date = $_POST['date'];
            $city = $_POST['city'];

            if (is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
                move_uploaded_file(
                    $_FILES['file']['tmp_name'],
                    dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name']
                );

                $pictureId = $_FILES['file']['name'];
                $event = new Event(null, $title, $description, $pictureId, $date, $city, $category);
                $this->eventRepository->addEvent($event);
            }else{
                $pictureId = '2.png';
                $event = new Event(null, $title, $description, $pictureId, $date, $city, $category);
                $this->eventRepository->addEvent($event);
            }
        }

        $this->render('addEvent');
    }

    public function events()
    {
        $events = $this->eventRepository->getEvents();
        $this->render('events', ['events' => $events]);
    }


    public function event()
    {
        if (isset($_GET['id'])) {
            $eventId = $_GET['id'];
            $event = $this->eventRepository->getEvent($eventId);

            if ($event) {
                // Przekazujemy informację o tym, czy event jest zapisany do widoku
                $isBookmarked = $this->isBookmarked($eventId);
                $this->render('event', ['event' => $event, 'isBookmarked' => $isBookmarked]);
                return;
            }
        }
        echo "Brak identyfikatora wydarzenia.";
    }

    private function isBookmarked(int $eventId): bool
    {
        if (!isset($_SESSION['user']) || empty($_SESSION['user']['id'])) {
            return false; // Jeśli użytkownik nie jest zalogowany, zwróć false
        }

        $userId = $_SESSION['user']['id'];
        return $this->bookmarksRepository->isEventInBookmarks($userId, $eventId);
    }



    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'Plik jest za duzy';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'Nie wspierany rozdaj zdjecia, dodaj w rozszerzeniu .png';
            return false;
        }
        return true;
    }

}