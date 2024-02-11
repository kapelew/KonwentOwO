<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Event.php';

class EventRepository extends Repository
{

    public function getEvent(int $event_id): ?Event
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM events e LEFT JOIN event_details ed 
            ON e.event_details_id = ed.event_details_id WHERE event_id = :event_id
        ');
        $stmt->bindParam(':event_id', $event_id, PDO::PARAM_INT);
        $stmt->execute();

        $event = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($event == false) {
            return null;
        }

        return new Event(
            $event['title'],
            $event['description'],
            $event['pictureId']
        );
    }

    public function getEvents(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM events e LEFT JOIN event_details ed 
            ON e.event_details_id = ed.event_details_id
        ');
        $stmt->execute();
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($events as $event) {
            $result[] = new Event(
                $event['title'],
                $event['description'],
                $event['pictureId']
            );
        }

        return $result;
    }

}