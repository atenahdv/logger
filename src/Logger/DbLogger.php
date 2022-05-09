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
      $query = "INSERT INTO log (data, created_at) VALUES ($data, date('Y-m-d H:i:s'));";
      $this->database->query($query);

    }
}





