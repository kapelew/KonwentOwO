<?php
require_once 'Repository.php';
require_once __DIR__ . '/../models/Event.php';

class BookmarksRepository extends Repository {
    public function addToBookmarks(int $userId, int $eventId)
    {
        $connection = $this->database->connect();

        $stmt = $connection->prepare('
            INSERT INTO user_events (user_id, event_id)
            VALUES (?, ?)
        ');
        $stmt->execute([$userId, $eventId]);
    }

    public function removeFromBookmarks(int $userId, int $eventId)
    {
        $connection = $this->database->connect();

        $stmt = $connection->prepare('
            DELETE FROM user_events
            WHERE user_id = ? AND event_id = ?
        ');
        $stmt->execute([$userId, $eventId]);
    }

    public function isEventInBookmarks(int $userId, int $eventId): bool
    {
        $connection = $this->database->connect();

        $stmt = $connection->prepare('
        SELECT COUNT(*) as count
        FROM user_events
        WHERE user_id = ? AND event_id = ?
    ');
        $stmt->execute([$userId, $eventId]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['count'] > 0;
    }

    public function getBookmarks(int $userId): array
    {
        $result = [];
        $connection = $this->database->connect();

        $stmt = $connection->prepare('
            SELECT e.event_id, e.title, ed.description, ed.date
            FROM events e
            LEFT JOIN event_details ed ON e.event_details_id = ed.event_details_id
            LEFT JOIN user_events ue ON e.event_id = ue.event_id
            WHERE ue.user_id = ?
        ');
        $stmt->execute([$userId]);

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
}
