<?

namespace App\Services;

use App\Repositories\BookRepositoryInterface;

class BookService
{
    private BookRepositoryInterface $bookRepository;

    function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function SearchBook(string $title, string $author, string $isbn): array
    {
        return $this->bookRepository->getData($title, $author, $isbn);
    }
}
