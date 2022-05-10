<?php


use PHPUnit\Framework\TestCase;
use Mockery;
use App\Logger\ApiLogger;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;



final class ApiLoggerTest extends TestCase
{
    use MockeryPHPUnitIntegration;
    public function testApiLog()
    {

        $mock = Mockery::mock(ApiLogger::class);
        $mock->shouldReceive('log')
        ->with('data=data');
        
        $this->assertEquals('data', $mock->log('data=data'));

    }


}
