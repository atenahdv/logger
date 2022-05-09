<?php

namespace App\Logger;
use App\DB\Database;


class DbLogger implements Logger
{
    protected $database;
    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function log(string $data){
      $statement = $this->database->prepare('INSERT INTO log (data, created_at)
      VALUES (:data, :created_at)');

    $statement->execute([
      'data' => $data,
      'created_at' => date('Y-m-d H:i:s'),
  ]);
     

    }
}





