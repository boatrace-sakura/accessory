<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium07;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium07Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium07
     */
    protected Stadium07 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium07(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.10, $response['bracket1LapTime']);
        $this->assertSame(4.86, $response['bracket1TurnTime']);
        $this->assertSame(6.10, $response['bracket1StraightTime']);
        $this->assertSame(37.09, $response['bracket2LapTime']);
        $this->assertSame(5.12, $response['bracket2TurnTime']);
        $this->assertSame(6.28, $response['bracket2StraightTime']);
        $this->assertSame(36.72, $response['bracket3LapTime']);
        $this->assertSame(5.50, $response['bracket3TurnTime']);
        $this->assertSame(6.18, $response['bracket3StraightTime']);
        $this->assertSame(37.12, $response['bracket4LapTime']);
        $this->assertSame(5.58, $response['bracket4TurnTime']);
        $this->assertSame(6.23, $response['bracket4StraightTime']);
        $this->assertSame(38.05, $response['bracket5LapTime']);
        $this->assertSame(5.84, $response['bracket5TurnTime']);
        $this->assertSame(5.93, $response['bracket5StraightTime']);
        $this->assertSame(37.82, $response['bracket6LapTime']);
        $this->assertSame(5.41, $response['bracket6TurnTime']);
        $this->assertSame(6.14, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame(37.15, $response['bracket1LapTime']);
        $this->assertSame(5.05, $response['bracket1TurnTime']);
        $this->assertSame(6.30, $response['bracket1StraightTime']);
        $this->assertSame(37.78, $response['bracket2LapTime']);
        $this->assertSame(5.23, $response['bracket2TurnTime']);
        $this->assertSame(6.18, $response['bracket2StraightTime']);
        $this->assertSame(37.68, $response['bracket3LapTime']);
        $this->assertSame(5.06, $response['bracket3TurnTime']);
        $this->assertSame(6.28, $response['bracket3StraightTime']);
        $this->assertSame(37.60, $response['bracket4LapTime']);
        $this->assertSame(5.38, $response['bracket4TurnTime']);
        $this->assertSame(6.12, $response['bracket4StraightTime']);
        $this->assertSame(37.11, $response['bracket5LapTime']);
        $this->assertSame(5.22, $response['bracket5TurnTime']);
        $this->assertSame(6.05, $response['bracket5StraightTime']);
        $this->assertSame(36.73, $response['bracket6LapTime']);
        $this->assertSame(5.11, $response['bracket6TurnTime']);
        $this->assertSame(6.18, $response['bracket6StraightTime']);
    }
}
