<?php


use PHPUnit\Framework\TestCase;

final class FileLoggerTest extends TestCase
{
    public function testLogToFile()
    {
        $logger=new \App\Logger\FileLogger();
        $logger->log('data');
        
        $filename = './log_'.date("j.n.Y").'.txt'; 
     
        $this->assertFileExists( 
            $filename, 
            "given filename doesn't exists"
        ); 
        $this->assertStringMatchesFormatFile($filename, 'data');

    }


}