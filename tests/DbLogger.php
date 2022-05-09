<?php


use PHPUnit\Framework\TestCase;

final class DbLoggerTest extends TestCase
{
    public function testLogToDb()
    {

        $database = new \App\DB\Database('localhost', 'root', '', 'log');
        $logger=new \App\Logger\DbLogger($database);
        $logger->log('data');
        
        $this->assertDatabaseHas('log', [
            'data' => 'data'
        ]);

    }


}