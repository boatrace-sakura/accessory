<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium02;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium02Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium02
     */
    protected Stadium02 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium02(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-05');
        $this->assertSame(36.67, $response['bracket1LapTime']);
        $this->assertSame(5.41, $response['bracket1TurnTime']);
        $this->assertSame(7.08, $response['bracket1StraightTime']);
        $this->assertSame(37.10, $response['bracket2LapTime']);
        $this->assertSame(5.70, $response['bracket2TurnTime']);
        $this->assertSame(7.01, $response['bracket2StraightTime']);
        $this->assertSame(37.33, $response['bracket3LapTime']);
        $this->assertSame(5.47, $response['bracket3TurnTime']);
        $this->assertSame(7.14, $response['bracket3StraightTime']);
        $this->assertSame(37.07, $response['bracket4LapTime']);
        $this->assertSame(5.50, $response['bracket4TurnTime']);
        $this->assertSame(7.00, $response['bracket4StraightTime']);
        $this->assertSame(37.30, $response['bracket5LapTime']);
        $this->assertSame(5.60, $response['bracket5TurnTime']);
        $this->assertSame(7.03, $response['bracket5StraightTime']);
        $this->assertSame(37.47, $response['bracket6LapTime']);
        $this->assertSame(5.70, $response['bracket6TurnTime']);
        $this->assertSame(7.01, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-05');
        $this->assertSame(37.08, $response['bracket1LapTime']);
        $this->assertSame(5.40, $response['bracket1TurnTime']);
        $this->assertSame(7.14, $response['bracket1StraightTime']);
        $this->assertSame(37.23, $response['bracket2LapTime']);
        $this->assertSame(5.53, $response['bracket2TurnTime']);
        $this->assertSame(7.04, $response['bracket2StraightTime']);
        $this->assertSame(36.72, $response['bracket3LapTime']);
        $this->assertSame(5.37, $response['bracket3TurnTime']);
        $this->assertSame(7.00, $response['bracket3StraightTime']);
        $this->assertSame(37.13, $response['bracket4LapTime']);
        $this->assertSame(5.31, $response['bracket4TurnTime']);
        $this->assertSame(7.00, $response['bracket4StraightTime']);
        $this->assertSame(38.09, $response['bracket5LapTime']);
        $this->assertSame(6.00, $response['bracket5TurnTime']);
        $this->assertSame(7.00, $response['bracket5StraightTime']);
        $this->assertSame(37.10, $response['bracket6LapTime']);
        $this->assertSame(5.63, $response['bracket6TurnTime']);
        $this->assertSame(7.07, $response['bracket6StraightTime']);
    }
}
