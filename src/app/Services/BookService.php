<?

namespace App\Services;

use App\Repositories\BookRepositoryInterface;
use App\Value;
use App\Value\Book;

class BookService
{
    private BookRepositoryInterface $bookRepository;

    function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function SearchBook(string $title, string $author, string $isbn): array
    {
        $data = $this->bookRepository->getData($title, $author, $isbn);

        $books = array();
        for ($i = 0; $i < count($data); $i++) {
            $book = new Book();

            // VolumeIDをbookインスタンスのプロパティにセットする。
            $book->setVolumeId($data[$i]->id);

            $book->setTitle($data[$i]->volumeInfo->title);
            if (property_exists($data[$i]->volumeInfo, 'imageLinks')) {
                $book->setCoverImgUrl($data[$i]->volumeInfo->imageLinks->thumbnail);
            }
            if (property_exists($data[$i]->volumeInfo, 'authors')) {
                $book->setAuthors($data[$i]->volumeInfo->authors);
            }
            if (property_exists($data[$i]->volumeInfo, 'publishedDate')) {
                $book->setPublishedDate($data[$i]->volumeInfo->publishedDate);
            }
            if (property_exists($data[$i]->volumeInfo, 'description')) {
                $book->setDescription($data[$i]->volumeInfo->description);
            }

            array_push($books, $book);
        }

        return $books;
    }

    public function GetBook(string $volumeId)
    {
        $data = $this->bookRepository->getBook($volumeId);

        $book = new Book();

        // VolumeIDをbookインスタンスのプロパティにセットする。
        $book->setVolumeId($data->id);

        $book->setTitle($data->volumeInfo->title);
        if (property_exists($data->volumeInfo, 'imageLinks')) {
            $book->setCoverImgUrl($data->volumeInfo->imageLinks->thumbnail);
        }
        if (property_exists($data->volumeInfo, 'authors')) {
            $book->setAuthors($data->volumeInfo->authors);
        }
        if (property_exists($data->volumeInfo, 'publishedDate')) {
            $book->setPublishedDate($data->volumeInfo->publishedDate);
        }
        if (property_exists($data->volumeInfo, 'description')) {
            $book->setDescription($data->volumeInfo->description);
        }

        return $book;

    }
}
