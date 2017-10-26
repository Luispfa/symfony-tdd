<?php

namespace AppBundle\Entity;

class Book {

    protected $title;
    protected $author;
    protected $datePublished;
    protected $categories;

    public function __construct($title, $author, $datePublished, $categories) {
        $this->title = $title;
        $this->author = $author;
        $this->datePublished = $datePublished;
        $this->category = $categories;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getDatePublished() {
        return $this->datePublished;
    }

    /**
     * @return mixed
     */
    public function getCategory() {
        return $this->category;
    }

}
