<?php


use PHPUnit\Framework\TestCase;

final class DbLoggerTest extends TestCase
{
    public function testLogToDb()
    {
        $logger=new \App\Logger\DbLogger();
        $logger->log('data');
        
        $this->assertDatabaseHas('log', [
            'data' => 'data'
        ]);

    }


}