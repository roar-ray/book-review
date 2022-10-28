<?php

namespace App\Repositories;

interface BookRepositoryInterface
{
    public function getData(string $title, string $author, string $isbn): array;

    public function getBook(string $volumeId);
}
