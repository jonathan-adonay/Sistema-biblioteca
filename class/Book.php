<?php
class Book
{
    private $bookTable = 'books';
    private $conn;

    public $title;
    public $author;
    public $genre;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function insert()
    {
        if ($this->title && $this->author && $this->genre) {
            $stmt = $this->conn->prepare("
                INSERT INTO " . $this->bookTable . "(`title`, `author`, `genre`)
                VALUES(?, ?, ?)");
            $this->title = htmlspecialchars(strip_tags($this->title));
            $this->author = htmlspecialchars(strip_tags($this->author));
            $this->genre = htmlspecialchars(strip_tags($this->genre));
            $stmt->bind_param("sss", $this->title, $this->author, $this->genre);

            return $stmt->execute();
        }
        return false;
    }

    public function listBooks()
    {
        $stmt = $this->conn->prepare("
            SELECT id, title, author, genre
            FROM " . $this->bookTable);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>