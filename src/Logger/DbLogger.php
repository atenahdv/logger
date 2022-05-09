<?php

namespace App\Logger;
use App\DB\Database;


class DbLogger implements Logger
{

    public function log(string $data){
     
      $database = new Database("localhost", "root", "", "log");
      $query = "INSERT INTO log (data, created_at) VALUES ($data, date('Y-m-d H:i:s'));";
      $database->query($query);
      var_dump($database);die();

    }
}





