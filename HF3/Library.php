<?php
require_once "AbstractLibrary.php";

class Library extends AbstractLibrary
{
    // TODO Implement all the methods declared in AbstractLibrary class
    public function addAuthor(string $authorName): Author
    {

        $author=new Author($authorName);
        $authors=$this->getAuthors();
        $authors[]=$author;
        $this->setAuthors($authors);
        return $author;

    }

    public function addBookForAuthor($authorName, Book $book)
    {

        foreach ($this->getAuthors() as $author) {
            if ($author->getName() === $authorName) {
                $author->addBook($book->getTitle(), $book->getPrice());
            }
        }
    }

    public function getBooksForAuthor($authorName)
    {

        foreach ($this->getAuthors() as $author) {
            if ($author->getName() === $authorName) {
                return $author->getBooks();
            }
        }
        throw new Exception("Nincs ilyen szerzo!");
    }


    public function search(string $bookName): Book
    {

        foreach ($this->getAuthors() as $author) {
            for ($i = 0; $i < count($author->getBooks()); $i++) {
                if ($bookName === $author->getBooks()[$i]->title)
                    return new Book($bookName, $author->getBooks()[$i]->price, $author);
            }
        }
        throw new Exception("Nincs ilyen konyv!");
    }

    public function print()
    {

        echo "<br>";
        foreach ($this->getAuthors() as $author) {
            echo $author->getName(), "<br>";
            echo "----------------------", "<br>";
            foreach ($author->getBooks() as $book) {
                echo $book, "<br>";
            }
            echo "<br>";
        }
    }
}