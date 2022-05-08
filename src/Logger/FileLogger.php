<?php

namespace App\Logger;

class FileLogger implements Logger
{
    public function log(string $data){
file_put_contents('./log_'.date("j.n.Y").'.txt', $data, FILE_APPEND);
    }
}