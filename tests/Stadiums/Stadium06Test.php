<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium06;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium06Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium06
     */
    protected Stadium06 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium06(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame(37.41, $response['bracket1LapTime']);
        $this->assertSame(5.69, $response['bracket1TurnTime']);
        $this->assertSame(7.75, $response['bracket1StraightTime']);
        $this->assertSame(37.35, $response['bracket2LapTime']);
        $this->assertSame(5.51, $response['bracket2TurnTime']);
        $this->assertSame(7.75, $response['bracket2StraightTime']);
        $this->assertSame(37.22, $response['bracket3LapTime']);
        $this->assertSame(5.60, $response['bracket3TurnTime']);
        $this->assertSame(7.87, $response['bracket3StraightTime']);
        $this->assertSame(36.49, $response['bracket4LapTime']);
        $this->assertSame(5.53, $response['bracket4TurnTime']);
        $this->assertSame(7.82, $response['bracket4StraightTime']);
        $this->assertSame(36.95, $response['bracket5LapTime']);
        $this->assertSame(6.20, $response['bracket5TurnTime']);
        $this->assertSame(7.51, $response['bracket5StraightTime']);
        $this->assertSame(37.85, $response['bracket6LapTime']);
        $this->assertSame(5.77, $response['bracket6TurnTime']);
        $this->assertSame(7.77, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame(37.31, $response['bracket1LapTime']);
        $this->assertSame(6.10, $response['bracket1TurnTime']);
        $this->assertSame(7.68, $response['bracket1StraightTime']);
        $this->assertSame(37.35, $response['bracket2LapTime']);
        $this->assertSame(5.89, $response['bracket2TurnTime']);
        $this->assertSame(7.82, $response['bracket2StraightTime']);
        $this->assertSame(36.83, $response['bracket3LapTime']);
        $this->assertSame(5.91, $response['bracket3TurnTime']);
        $this->assertSame(7.64, $response['bracket3StraightTime']);
        $this->assertSame(37.13, $response['bracket4LapTime']);
        $this->assertSame(5.90, $response['bracket4TurnTime']);
        $this->assertSame(7.65, $response['bracket4StraightTime']);
        $this->assertSame(37.37, $response['bracket5LapTime']);
        $this->assertSame(6.00, $response['bracket5TurnTime']);
        $this->assertSame(7.65, $response['bracket5StraightTime']);
        $this->assertSame(37.00, $response['bracket6LapTime']);
        $this->assertSame(5.93, $response['bracket6TurnTime']);
        $this->assertSame(7.44, $response['bracket6StraightTime']);
    }
}
