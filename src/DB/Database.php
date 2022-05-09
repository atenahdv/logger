<?php

namespace App\DB;

class Database {
  private $host, $database, $username, $password, $connection;
  private $port = 3306;
  protected $pdo;
  /**
  * Sets the connection credentials to connect to your database.
  *
  * @param string $host - the host of your database
  * @param string $username - the username of your database
  * @param string $password - the password of your database
  * @param string $database - your database name
  * @param integer $port - the port of your database
  */
  function __construct($host, $username, $password, $database, $port = 3306) {
    $this->host = $host;
    $this->database = $database;
    $this->username = $username;
    $this->password = $password;
    $this->port = $port;
   
    try {
      $this->pdo = new \PDO("mysql:host={$this->host};dbname={$this->database}",$this->username , $this->password);
  } catch (\Exception $e) {
      die('Error : ' . $e->getMessage());
  }
  

  }
}