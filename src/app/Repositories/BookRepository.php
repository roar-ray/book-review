<?php

namespace App\Repositories;

class BookRepository implements BookRepositoryInterface
{
    // APIエンドポイント
    const ENDPOINT_URL = 'https://www.googleapis.com/books/v1/volumes';

    private $url;

    public function getData(string $title, string $author, string $isbn): array
    {
        $books = array();

        // 検索条件の設定
        $searchCondition = [
            empty($title) ? "" : "intitle:" . $title,
            empty($author) ? "" : "inauthor:" . $author,
            empty($isbn) ? "" : "isbn:" . $isbn,
        ];

        // URLの設定
        $this->url = self::ENDPOINT_URL. "?q=" . implode('+', array_filter($searchCondition));

        // 書籍情報を取得
        $json = file_get_contents($this->url);
        $data = json_decode($json);
        if ($data->totalItems > 0) {
            $books = $data->items;
        }

        return $books;
    }

    public function getBook(string $volumeId)
    {
        $book = array();

        // URLの設定
        $this->url = self::ENDPOINT_URL."/".$volumeId;

        // 書籍情報を取得
        $json = file_get_contents($this->url);
        $book = json_decode($json);
        
        return $book;

    }
}
