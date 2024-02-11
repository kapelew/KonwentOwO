<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Event.php';
require_once __DIR__.'/../repository/EventRepository.php';

class EventController extends AppController
{

    private $message = [];
    private $eventRepository;

    public function __construct()
    {
        parent::__construct();
        $this->eventRepository = new EventRepository();
    }

    public function events()
    {
        $events = $this->eventRepository->getEvents();
        $this->render('events', ['events' => $events]);
    }


//    public function events()
//    {
//        //display events.php
//        $this->render('events');
//    }
//}
}