<?php

namespace App\Repositories;

class BookRepository implements BookRepositoryInterface
{
    // APIエンドポイント
    const ENDPOINT_URL = 'https://www.googleapis.com/books/v1/volumes?q=';

    private $url;

    function __construct()
    {
        $this->url = self::ENDPOINT_URL;
    }

    public function getData(string $title, string $author, string $isbn): array
    {
        $books = array();

        // 検索条件の設定
        $this->url .= empty($title) ? "" : "intitle:" . $title . "+";
        $this->url .= empty($author) ? "" : "inauthor:" . $author . "+";
        $this->url .= empty($isbn) ? "" : "isbn:" . $isbn;

        // 書籍情報を取得
        $json = file_get_contents($this->url);
        $data = json_decode($json);
        if ($data->totalItems > 0) {
            $books = $data->items;
        }
        return $books;
    }
}
