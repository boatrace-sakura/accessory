<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium24;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium24Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium24
     */
    protected Stadium24 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium24(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('川上昇平', $response['bracket1RacerName']);
        $this->assertSame(6.89, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.93, $response['bracket1LapTime']);
        $this->assertSame(6.12, $response['bracket1TurnTime']);
        $this->assertSame(7.33, $response['bracket1StraightTime']);
        $this->assertSame('山口真喜子', $response['bracket2RacerName']);
        $this->assertSame(6.83, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.73, $response['bracket2LapTime']);
        $this->assertSame(6.10, $response['bracket2TurnTime']);
        $this->assertSame(7.23, $response['bracket2StraightTime']);
        $this->assertSame('中島浩哉', $response['bracket3RacerName']);
        $this->assertSame(6.87, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket3LapTime']);
        $this->assertSame(6.00, $response['bracket3TurnTime']);
        $this->assertSame(7.33, $response['bracket3StraightTime']);
        $this->assertSame('江頭賢太', $response['bracket4RacerName']);
        $this->assertSame(6.83, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.61, $response['bracket4LapTime']);
        $this->assertSame(6.29, $response['bracket4TurnTime']);
        $this->assertSame(7.23, $response['bracket4StraightTime']);
        $this->assertSame('田中孝明', $response['bracket5RacerName']);
        $this->assertSame(6.86, $response['bracket5ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket5LapTime']);
        $this->assertSame(6.07, $response['bracket5TurnTime']);
        $this->assertSame(7.33, $response['bracket5StraightTime']);
        $this->assertSame('津留浩一郎', $response['bracket6RacerName']);
        $this->assertSame(6.77, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.80, $response['bracket6LapTime']);
        $this->assertSame(6.50, $response['bracket6TurnTime']);
        $this->assertSame(7.37, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('山崎昂介', $response['bracket1RacerName']);
        $this->assertSame(6.79, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.37, $response['bracket1LapTime']);
        $this->assertSame(6.39, $response['bracket1TurnTime']);
        $this->assertSame(7.23, $response['bracket1StraightTime']);
        $this->assertSame('谷川将太', $response['bracket2RacerName']);
        $this->assertSame(6.83, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.03, $response['bracket2LapTime']);
        $this->assertSame(6.27, $response['bracket2TurnTime']);
        $this->assertSame(7.23, $response['bracket2StraightTime']);
        $this->assertSame('眞鳥康太', $response['bracket3RacerName']);
        $this->assertSame(6.87, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.25, $response['bracket3LapTime']);
        $this->assertSame(6.50, $response['bracket3TurnTime']);
        $this->assertSame(7.37, $response['bracket3StraightTime']);
        $this->assertSame('森口和紀', $response['bracket4RacerName']);
        $this->assertSame(6.85, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.77, $response['bracket4LapTime']);
        $this->assertSame(6.17, $response['bracket4TurnTime']);
        $this->assertSame(7.33, $response['bracket4StraightTime']);
        $this->assertSame('大串重幸', $response['bracket5RacerName']);
        $this->assertSame(6.84, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.82, $response['bracket5LapTime']);
        $this->assertSame(6.23, $response['bracket5TurnTime']);
        $this->assertSame(7.34, $response['bracket5StraightTime']);
        $this->assertSame('吉川勇作', $response['bracket6RacerName']);
        $this->assertSame(6.84, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.54, $response['bracket6LapTime']);
        $this->assertSame(6.33, $response['bracket6TurnTime']);
        $this->assertSame(7.33, $response['bracket6StraightTime']);
    }
}
