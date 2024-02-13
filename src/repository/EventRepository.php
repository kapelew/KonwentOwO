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
            $event['event_id'],
            $event['title'],
            $event['description'],
            $event['picture_id'],
            $event['date'],
            $event['city'],
            $event['category']
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
                $event['event_id'],
                $event['title'],
                $event['description'],
                $event['picture_id'],
                $event['date'],
                $event['city'],
                $event['category']
            );
        }

        return $result;
    }

    public function getEventByTitle(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM events 
            LEFT JOIN event_details ON events.event_details_id = event_details.event_details_id
            WHERE LOWER(events.title) LIKE :search OR LOWER(event_details.category) LIKE :search OR LOWER(event_details.city) LIKE :search;
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function addEvent(Event $event): void
    {
        $connection = $this->database->connect();

        // Wstawiamy nowy rekord do tabeli event_details
        $stmt = $connection->prepare('
        INSERT INTO event_details (description, date, picture_id, category, city)
        VALUES (?, ?, ?, ?, ?)
    ');
        $stmt->execute([
            $event->getDescription(),
            $event->getDate(),
            $event->getPictureId(),
            $event->getCategory(),
            $event->getCity()
        ]);

        // Pobieramy event_details_id na podstawie opisu
        $description = $event->getDescription();
        $stmt = $connection->prepare('
        SELECT event_details_id FROM event_details
        WHERE description = ?
    ');
        $stmt->execute([$description]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $eventDetailsId = $row['event_details_id'];

        // Wstawiamy nowy rekord do tabeli events
        $stmt = $connection->prepare('
        INSERT INTO events (event_details_id, title)
        VALUES (?, ?)
    ');
        $stmt->execute([
            $eventDetailsId,
            $event->getTitle()
        ]);
    }


    public function getLastInsertId()
    {
        return $this->database->connect()->lastInsertId();
    }

}