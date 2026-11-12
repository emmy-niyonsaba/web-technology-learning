
<?php
class Book {
    public $book_id;
    public $bookname;
    public $author;
    public $price;

    // Constructor
    public function __construct($book_id, $bookname, $author, $price) {
        $this->book_id = $book_id;
        $this->bookname = $bookname;
        $this->author = $author;
        $this->price = $price;
    }

    // Display book information
    public function displayInfo() {
        echo "Book ID: " . $this->book_id . "<br>";
        echo "Book Name: " . $this->bookname . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Price: " . $this->price . " RWF<br><br>";
    }
}

// Creation  two book objects
$book1 = new Book(1, "Umukene azapfa", "Emmanuel Niyonsaba", 5000);
$book2 = new Book(2, "Money Matters", "Intare lion", 4000);

// Display information about both books
echo "<h3>Book 1 Information</h3>";
$book1->displayInfo();

echo "<h3>Book 2 Information</h3>";
$book2->displayInfo();
?>