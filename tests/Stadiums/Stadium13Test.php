<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium13;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium13Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium13
     */
    protected Stadium13 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium13(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-04-23');
        $this->assertSame(38.01, $response['bracket1LapTime']);
        $this->assertSame(11.67, $response['bracket1TurnTime']);
        $this->assertSame(38.10, $response['bracket2LapTime']);
        $this->assertSame(11.89, $response['bracket2TurnTime']);
        $this->assertSame(37.64, $response['bracket3LapTime']);
        $this->assertSame(11.72, $response['bracket3TurnTime']);
        $this->assertSame(38.49, $response['bracket4LapTime']);
        $this->assertSame(11.90, $response['bracket4TurnTime']);
        $this->assertSame(38.25, $response['bracket5LapTime']);
        $this->assertSame(11.63, $response['bracket5TurnTime']);
        $this->assertSame(38.02, $response['bracket6LapTime']);
        $this->assertSame(11.74, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 10, date: '2024-04-23');
        $this->assertSame(37.59, $response['bracket1LapTime']);
        $this->assertSame(11.75, $response['bracket1TurnTime']);
        $this->assertSame(37.53, $response['bracket2LapTime']);
        $this->assertSame(11.72, $response['bracket2TurnTime']);
        $this->assertSame(38.15, $response['bracket3LapTime']);
        $this->assertSame(11.94, $response['bracket3TurnTime']);
        $this->assertSame(38.49, $response['bracket4LapTime']);
        $this->assertSame(11.99, $response['bracket4TurnTime']);
        $this->assertSame(38.47, $response['bracket5LapTime']);
        $this->assertSame(12.03, $response['bracket5TurnTime']);
        $this->assertSame(37.52, $response['bracket6LapTime']);
        $this->assertSame(11.89, $response['bracket6TurnTime']);
    }
}
