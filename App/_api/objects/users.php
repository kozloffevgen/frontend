<?php
class Users {
  private $conn;
  private $table_name = "users";

  public $id;
  public $login;
  public $pass;

  public function __construct($db) {
    $this->conn = $db;
  }

  function read() {
    $query = "SELECT * FROM " . $this->table_name . "";

    $stmt = $this->conn->prepare($query);

    $stmt->execute();

    return $stmt; 
  }
}
?>