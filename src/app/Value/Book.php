<?php

namespace App\Value;

class Book
{
    private string $coverImgUrl;
    private string $title;
    private array $authors;
    private string $publishedDate;
    private string $description;

    function __construct()
    {
        $this->coverImgUrl = "";
        $this->title = "";
        $this->authors = array();
        $this->publishedDate = "";
        $this->description = "";
    }

    public function setCoverImgUrl(string $coverImgUrl)
    {
        $this->coverImgUrl = $coverImgUrl;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setAuthors(array $authors)
    {
        $this->authors = $authors;
    }

    public function setPublishedDate(string $publishedDate)
    {
        $this->publishedDate = $publishedDate;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getCoverImgUrl() : string
    {
        return $this->coverImgUrl;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getAuthors() : string
    {
        return implode(",",$this->authors);
    }

    public function getPublishedDate() : string
    {
        return $this->publishedDate;
    }

    public function getDescription() : string
    {
        return $this->description;
    }
}
