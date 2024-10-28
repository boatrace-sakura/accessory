<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium21;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium21Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium21
     */
    protected Stadium21 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium21(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame(35.62, $response['bracket1LapTime']);
        $this->assertSame(7.66, $response['bracket1TurnTime']);
        $this->assertSame(7.30, $response['bracket1StraightTime']);
        $this->assertSame(36.86, $response['bracket2LapTime']);
        $this->assertSame(8.11, $response['bracket2TurnTime']);
        $this->assertSame(7.42, $response['bracket2StraightTime']);
        $this->assertSame(36.99, $response['bracket3LapTime']);
        $this->assertSame(8.09, $response['bracket3TurnTime']);
        $this->assertSame(7.44, $response['bracket3StraightTime']);
        $this->assertSame(36.89, $response['bracket4LapTime']);
        $this->assertSame(8.22, $response['bracket4TurnTime']);
        $this->assertSame(7.39, $response['bracket4StraightTime']);
        $this->assertSame(37.41, $response['bracket5LapTime']);
        $this->assertSame(8.21, $response['bracket5TurnTime']);
        $this->assertSame(7.44, $response['bracket5StraightTime']);
        $this->assertSame(36.83, $response['bracket6LapTime']);
        $this->assertSame(7.98, $response['bracket6TurnTime']);
        $this->assertSame(7.51, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame(36.04, $response['bracket1LapTime']);
        $this->assertSame(7.68, $response['bracket1TurnTime']);
        $this->assertSame(7.36, $response['bracket1StraightTime']);
        $this->assertSame(36.88, $response['bracket2LapTime']);
        $this->assertSame(8.06, $response['bracket2TurnTime']);
        $this->assertSame(7.43, $response['bracket2StraightTime']);
        $this->assertSame(36.89, $response['bracket3LapTime']);
        $this->assertSame(8.09, $response['bracket3TurnTime']);
        $this->assertSame(7.39, $response['bracket3StraightTime']);
        $this->assertSame(36.61, $response['bracket4LapTime']);
        $this->assertSame(8.21, $response['bracket4TurnTime']);
        $this->assertSame(7.32, $response['bracket4StraightTime']);
        $this->assertSame(37.53, $response['bracket5LapTime']);
        $this->assertSame(8.37, $response['bracket5TurnTime']);
        $this->assertSame(7.40, $response['bracket5StraightTime']);
        $this->assertSame(37.33, $response['bracket6LapTime']);
        $this->assertSame(8.25, $response['bracket6TurnTime']);
        $this->assertSame(7.43, $response['bracket6StraightTime']);
    }
}
