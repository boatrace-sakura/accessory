<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium14;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium14Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium14
     */
    protected Stadium14 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium14(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame(36.39, $response['bracket1LapTime']);
        $this->assertSame(5.67, $response['bracket1TurnTime']);
        $this->assertSame(6.88, $response['bracket1StraightTime']);
        $this->assertSame(37.17, $response['bracket2LapTime']);
        $this->assertSame(5.86, $response['bracket2TurnTime']);
        $this->assertSame(7.20, $response['bracket2StraightTime']);
        $this->assertSame(37.10, $response['bracket3LapTime']);
        $this->assertSame(5.87, $response['bracket3TurnTime']);
        $this->assertSame(7.07, $response['bracket3StraightTime']);
        $this->assertSame(36.87, $response['bracket4LapTime']);
        $this->assertSame(5.70, $response['bracket4TurnTime']);
        $this->assertSame(7.08, $response['bracket4StraightTime']);
        $this->assertSame(36.97, $response['bracket5LapTime']);
        $this->assertSame(5.80, $response['bracket5TurnTime']);
        $this->assertSame(6.91, $response['bracket5StraightTime']);
        $this->assertSame(36.90, $response['bracket6LapTime']);
        $this->assertSame(7.30, $response['bracket6TurnTime']);
        $this->assertSame(6.80, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-01');
        $this->assertSame(36.80, $response['bracket1LapTime']);
        $this->assertSame(5.63, $response['bracket1TurnTime']);
        $this->assertSame(7.07, $response['bracket1StraightTime']);
        $this->assertSame(36.87, $response['bracket2LapTime']);
        $this->assertSame(5.70, $response['bracket2TurnTime']);
        $this->assertSame(7.23, $response['bracket2StraightTime']);
        $this->assertSame(36.27, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(7.00, $response['bracket3StraightTime']);
        $this->assertSame(36.43, $response['bracket4LapTime']);
        $this->assertSame(5.87, $response['bracket4TurnTime']);
        $this->assertSame(6.93, $response['bracket4StraightTime']);
        $this->assertSame(37.03, $response['bracket5LapTime']);
        $this->assertSame(5.43, $response['bracket5TurnTime']);
        $this->assertSame(7.03, $response['bracket5StraightTime']);
        $this->assertSame(36.77, $response['bracket6LapTime']);
        $this->assertSame(5.57, $response['bracket6TurnTime']);
        $this->assertSame(7.00, $response['bracket6StraightTime']);
    }
}
