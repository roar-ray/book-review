<?php

namespace App\Value;

class Book
{
    private string $volumeId;
    private string $isbn10;
    private string $isbn13;
    private string $coverImgUrl;
    private string $title;
    private array $authors;
    private string $publishedDate;
    private string $description;

    function __construct()
    {
        $this->volumeId = "";
        $this->isbn10 = "";
        $this->isbn13 = "";
        $this->coverImgUrl = "";
        $this->title = "";
        $this->authors = array();
        $this->publishedDate = "";
        $this->description = "";
    }

    public function setVolumeId(string $volumeId)
    {
        $this->volumeId = $volumeId;
    }

    public function setIsbn10(string $isbn10)
    {
        $this->isbn10 = $isbn10;
    }
    
    public function setIsbn13(string $isbn13)
    {
        $this->isbn13 = $isbn13;
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

    public function getVolumeId() : string
    {
        return $this->volumeId;
    }

    public function getIsbn10() : string
    {
        return $this->isbn10;
    }

    public function getIsbn13() : string
    {
        return $this->isbn13;
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
