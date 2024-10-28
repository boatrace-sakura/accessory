<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium11;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium11Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium11
     */
    protected Stadium11 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium11(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-03');
        $this->assertSame(36.90, $response['bracket1LapTime']);
        $this->assertSame(5.28, $response['bracket1TurnTime']);
        $this->assertSame(7.98, $response['bracket1StraightTime']);
        $this->assertSame(36.67, $response['bracket2LapTime']);
        $this->assertSame(5.33, $response['bracket2TurnTime']);
        $this->assertSame(7.88, $response['bracket2StraightTime']);
        $this->assertSame(37.19, $response['bracket3LapTime']);
        $this->assertSame(5.40, $response['bracket3TurnTime']);
        $this->assertSame(8.03, $response['bracket3StraightTime']);
        $this->assertSame(37.38, $response['bracket4LapTime']);
        $this->assertSame(5.77, $response['bracket4TurnTime']);
        $this->assertSame(7.90, $response['bracket4StraightTime']);
        $this->assertSame(37.29, $response['bracket5LapTime']);
        $this->assertSame(5.61, $response['bracket5TurnTime']);
        $this->assertSame(7.85, $response['bracket5StraightTime']);
        $this->assertSame(37.28, $response['bracket6LapTime']);
        $this->assertSame(5.62, $response['bracket6TurnTime']);
        $this->assertSame(7.68, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-03');
        $this->assertSame(36.92, $response['bracket1LapTime']);
        $this->assertSame(5.25, $response['bracket1TurnTime']);
        $this->assertSame(7.89, $response['bracket1StraightTime']);
        $this->assertSame(37.89, $response['bracket2LapTime']);
        $this->assertSame(5.61, $response['bracket2TurnTime']);
        $this->assertSame(8.04, $response['bracket2StraightTime']);
        $this->assertSame(37.68, $response['bracket3LapTime']);
        $this->assertSame(5.72, $response['bracket3TurnTime']);
        $this->assertSame(7.90, $response['bracket3StraightTime']);
        $this->assertSame(37.35, $response['bracket4LapTime']);
        $this->assertSame(5.68, $response['bracket4TurnTime']);
        $this->assertSame(7.87, $response['bracket4StraightTime']);
        $this->assertSame(37.36, $response['bracket5LapTime']);
        $this->assertSame(5.84, $response['bracket5TurnTime']);
        $this->assertSame(7.80, $response['bracket5StraightTime']);
        $this->assertSame(36.71, $response['bracket6LapTime']);
        $this->assertSame(5.39, $response['bracket6TurnTime']);
        $this->assertSame(8.02, $response['bracket6StraightTime']);
    }
}
