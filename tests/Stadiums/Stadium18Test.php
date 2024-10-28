<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium18;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium18Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium18
     */
    protected Stadium18 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium18(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.87, $response['bracket1LapTime']);
        $this->assertSame(11.33, $response['bracket1TurnTime']);
        $this->assertSame(38.21, $response['bracket2LapTime']);
        $this->assertSame(12.10	, $response['bracket2TurnTime']);
        $this->assertSame(37.71, $response['bracket3LapTime']);
        $this->assertSame(11.65	, $response['bracket3TurnTime']);
        $this->assertSame(37.37, $response['bracket4LapTime']);
        $this->assertSame(11.66, $response['bracket4TurnTime']);
        $this->assertSame(37.40, $response['bracket5LapTime']);
        $this->assertSame(11.66, $response['bracket5TurnTime']);
        $this->assertSame(37.40, $response['bracket6LapTime']);
        $this->assertSame(11.63, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-01');
        $this->assertSame(36.91, $response['bracket1LapTime']);
        $this->assertSame(11.42, $response['bracket1TurnTime']);
        $this->assertSame(37.77, $response['bracket2LapTime']);
        $this->assertSame(	11.86	, $response['bracket2TurnTime']);
        $this->assertSame(36.95, $response['bracket3LapTime']);
        $this->assertSame(11.43	, $response['bracket3TurnTime']);
        $this->assertSame(37.55, $response['bracket4LapTime']);
        $this->assertSame(11.77, $response['bracket4TurnTime']);
        $this->assertSame(37.17, $response['bracket5LapTime']);
        $this->assertSame(11.55, $response['bracket5TurnTime']);
        $this->assertSame(37.00, $response['bracket6LapTime']);
        $this->assertSame(11.26, $response['bracket6TurnTime']);
    }
}
