<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/Event.php';
require_once __DIR__ . '/../repository/BookmarksRepository.php';

class BookmarksController extends AppController
{
    private $bookmarksRepository;

    public function __construct()
    {
        parent::__construct();
        $this->bookmarksRepository = new BookmarksRepository();
    }

    public function addToBookmarks()
    {
        if ($this->isPost()) {
            if (empty($_SESSION['user'])) {
                $this->render('login', ['messages' => ['Zaloguj sie aby kontynuowac']]);
                exit();
            }
            $userId = $_SESSION['user']['id'];
            $eventId = $_POST['event_id'];
            $isEventInBookmarks = $this->bookmarksRepository->isEventInBookmarks($userId, $eventId);
            if (!$isEventInBookmarks) {
                $this->bookmarksRepository->addToBookmarks($userId, $eventId);
                header("Location: /bookmarks");
                exit();
            } else {
                header("Location: /bookmarks");
                exit();
            }
        }
    }

    public function isBookmarked(){
        $userId = $_SESSION['user']['id'];
        $eventId = $_POST['event_id'];
        $isEventInBookmarks = $this->bookmarksRepository->isEventInBookmarks($userId, $eventId);
        if (!$isEventInBookmarks) {

        } else {

        }
    }

    public function removeFromBookmarks()
    {
        if ($this->isPost()) {
            if (empty($_SESSION['user'])) {
                $this->render('login', ['messages' => ['Zaloguj sie aby kontynuowac']]);
                exit();
            }
            $userId = $_SESSION['user']['id'];
            $eventId = $_POST['event_id'];
            $isEventInBookmarks = $this->bookmarksRepository->isEventInBookmarks($userId, $eventId);
            if ($isEventInBookmarks) {
                $this->bookmarksRepository->removeFromBookmarks($userId, $eventId);
                header("Location: /bookmarks");
                exit();
            }
        }
    }

    public function bookmarks()
    {
        if (empty($_SESSION['user'])) {
            $this->render('login', ['messages' => ['Log in to continue']]);
            exit();
        }
        $userId = $_SESSION['user']['id'];
        $bookmarks = $this->bookmarksRepository->getBookmarks($userId);
        $this->render('bookmarks', ['bookmarks' => $bookmarks]); // Przekazanie danych do widoku
    }

}
