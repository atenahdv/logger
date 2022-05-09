<?php


use PHPUnit\Framework\TestCase;
use League\Container\Container;
use App\DB\Database;
use App\Logger\DbLogger;


final class DbLoggerTest extends TestCase
{
    public function testLogToDb()
    {

$container = new Container();

$container->add(DbLogger::class)->addArgument(Database::class);
$container->add(Database::class, function () {
    $database = new Database('localhost', 'root', '', 'log');
    return $database;
});

$logger = $container->get(DbLogger::class);

        $logger->log('data');
        
        $this->assertDatabaseHas('log', [
            'data' => 'data'
        ]);

    }


}
