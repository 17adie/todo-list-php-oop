<?php

  class config {
    private $user = "root";
    private $password = "";
    private $host = "127.0.0.1";
    private $database = "test_db";

    public $pdo = null;

    public function con() {
      try {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database;", $this->user, $this->password);
      } catch (PDOException $e) {
        die($e->getMessage());;
      }
      return $this->pdo;
    }

  }

?>