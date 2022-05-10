<?php

namespace App\Logger;
use App\DB\Database;


class DbLogger implements Logger
{
    public function __construct(private string $data)
    {
        $this->data = $data; 
    }

    public function log(string $data){

        //Initiate cURL.
 $curl = curl_init('https://localhost/logger/index.php');

curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $this->data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($curl);

curl_close($curl);
return $result;
    }
}





