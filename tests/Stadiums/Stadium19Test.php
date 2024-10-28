<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium19;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium19Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium19
     */
    protected Stadium19 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium19(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.57, $response['bracket1LapTime']);
        $this->assertSame(5.90, $response['bracket1TurnTime']);
        $this->assertSame(7.33, $response['bracket1StraightTime']);
        $this->assertSame(37.24, $response['bracket2LapTime']);
        $this->assertSame(6.14, $response['bracket2TurnTime']);
        $this->assertSame(7.45, $response['bracket2StraightTime']);
        $this->assertSame(37.03, $response['bracket3LapTime']);
        $this->assertSame(5.93, $response['bracket3TurnTime']);
        $this->assertSame(7.39, $response['bracket3StraightTime']);
        $this->assertSame(37.64, $response['bracket4LapTime']);
        $this->assertSame(5.91, $response['bracket4TurnTime']);
        $this->assertSame(7.37, $response['bracket4StraightTime']);
        $this->assertSame(37.92, $response['bracket5LapTime']);
        $this->assertSame(6.42, $response['bracket5TurnTime']);
        $this->assertSame(7.42, $response['bracket5StraightTime']);
        $this->assertSame(36.98, $response['bracket6LapTime']);
        $this->assertSame(5.58, $response['bracket6TurnTime']);
        $this->assertSame(7.37, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2024-01-01');
        $this->assertSame(36.32, $response['bracket1LapTime']);
        $this->assertSame(5.48, $response['bracket1TurnTime']);
        $this->assertSame(7.28, $response['bracket1StraightTime']);
        $this->assertSame(37.53, $response['bracket2LapTime']);
        $this->assertSame(6.20, $response['bracket2TurnTime']);
        $this->assertSame(7.16, $response['bracket2StraightTime']);
        $this->assertSame(36.40, $response['bracket3LapTime']);
        $this->assertSame(5.60, $response['bracket3TurnTime']);
        $this->assertSame(7.34, $response['bracket3StraightTime']);
        $this->assertSame(36.70, $response['bracket4LapTime']);
        $this->assertSame(5.63, $response['bracket4TurnTime']);
        $this->assertSame(7.29, $response['bracket4StraightTime']);
        $this->assertSame(36.64, $response['bracket5LapTime']);
        $this->assertSame(5.51, $response['bracket5TurnTime']);
        $this->assertSame(7.31, $response['bracket5StraightTime']);
        $this->assertSame(36.68, $response['bracket6LapTime']);
        $this->assertSame(5.50, $response['bracket6TurnTime']);
        $this->assertSame(7.33, $response['bracket6StraightTime']);
    }
}
