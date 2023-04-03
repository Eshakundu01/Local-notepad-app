<?php

/**
 * Book is the class that contains functions related to books.
 */
class Book {
  /**
   * 
   * Stores the connection of the database.
   * 
   * @access protected
   */
  protected $connection;

  /**
   * 
   * It is a constructor that initiates new database connection.
   * 
   * @return void
   */
  public function __construct() {
    $this->connection = new mysqli("localhost", "root", PASS, "notepad");
    // Check connection
    if ($this->connection->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  }

  /**
   * Inserts data entered by the admin.
   *
   * @param string $id
   * @param string $title
   * @param string $genre
   * @param string $date
   * @param string $author
   * @param string $image
   * @param float $ratings
   * @param string $category
   * @return boolean
   */
  public function insertEntry($id, $title, $genre, $date, $author, $image, $ratings, $category) {
    $bookId = $this->connection->real_escape_string($id);
    $bookTitle = $this->connection->real_escape_string($title);
    $bookGenre = $this->connection->real_escape_string($genre);
    $publication = $this->connection->real_escape_string($date);
    $bookAuthor = $this->connection->real_escape_string($author);
    $poster = $this->connection->real_escape_string($image);
    $rate = $this->connection->real_escape_string($ratings);
    $bookCategory = $this->connection->real_escape_string($category);

    $sql = "insert into books(id, title, genre, date, author, image, ratings, category) 
    values ('$bookId', '$bookTitle', '$bookGenre', '$publication', '$bookAuthor'
    , '$poster', '$rate', '$bookCategory')";

    if ($this->connection->query($sql)) {
      return true;
    } else {
      return false;
    }
  }
}
