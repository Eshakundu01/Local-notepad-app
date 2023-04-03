<?php

require_once 'secret.php';

/**
 * 
 * Database class contains the queries related to the users and admins
 * functions.
 * 
 */
class Database {
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
   * 
   * It checks the username and password is present in the database or not.
   * 
   * @return boolean
   */
  public function getClientInfo($statement, $value) {
    $sql = "select " . $statement . " from client where " . $statement . " = '$value'";

    $result = $this->connection->query($sql);

    if ($result->num_rows) {
      return true;
    } else {
      return false;
    }
  }

  /**
   * 
   * It gets the role of the user.
   * 
   * @return boolean
   */
  public function getRole($user) {
    $sql = "select role from client where username = '$user'";

    $result = $this->connection->query($sql);

    if($result->num_rows) {
      while($row = $result->fetch_assoc()) {
        return $row['role'];
      }
    } else {
      return false;
    }
  }
}
