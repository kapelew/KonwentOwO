<?php

class Event
{
    private $eventId;
    private $title;
    private $description;
    private $date;
    private $city;
    private $pictureId;
    private $category;


    public function __construct($eventId, $title, $description, $pictureId, $date, $city, $category)
    {
        $this->eventId = $eventId;
        $this->title = $title;
        $this->description = $description;
        $this->pictureId = $pictureId;
        $this->date = $date;
        $this->city = $city;
        $this->category = $category;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title): void
    {
        $this->title = $title;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description): void
    {
        $this->description = $description;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date): void
    {
        $this->date = $date;
    }


    public function getCity()
    {
        return $this->city;
    }


    public function setCity($city): void
    {
        $this->city = $city;
    }


    public function getPictureId()
    {
        return $this->pictureId;
    }


    public function setPictureId($pictureId): void
    {
        $this->pictureId = $pictureId;
    }


    public function getCategory()
    {
        return $this->category;
    }


    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function setEventId($eventId): void
    {
        $this->eventId = $eventId;
    }
}