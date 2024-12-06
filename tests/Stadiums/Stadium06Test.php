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
        $response = $this->stadium->times(raceNumber: 1, date: '2024-11-01');
        $this->assertSame('星栄爾', $response['bracket1RacerName']);
        $this->assertSame(6.70, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.50, $response['bracket1LapTime']);
        $this->assertSame(5.60, $response['bracket1TurnTime']);
        $this->assertSame(7.69, $response['bracket1StraightTime']);
        $this->assertSame('吉武真也', $response['bracket2RacerName']);
        $this->assertSame(6.66, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.71, $response['bracket2LapTime']);
        $this->assertSame(5.90, $response['bracket2TurnTime']);
        $this->assertSame(7.63, $response['bracket2StraightTime']);
        $this->assertSame('小川時光', $response['bracket3RacerName']);
        $this->assertSame(6.67, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.48, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(7.73, $response['bracket3StraightTime']);
        $this->assertSame('尾道佳諭', $response['bracket4RacerName']);
        $this->assertSame(6.63, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.59, $response['bracket4LapTime']);
        $this->assertSame(5.57, $response['bracket4TurnTime']);
        $this->assertSame(7.73, $response['bracket4StraightTime']);
        $this->assertSame('土井祥伍', $response['bracket5RacerName']);
        $this->assertSame(6.67, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.30, $response['bracket5LapTime']);
        $this->assertSame(5.77, $response['bracket5TurnTime']);
        $this->assertSame(7.70, $response['bracket5StraightTime']);
        $this->assertSame('大島隆乃介', $response['bracket6RacerName']);
        $this->assertSame(6.69, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.27, $response['bracket6LapTime']);
        $this->assertSame(5.53, $response['bracket6TurnTime']);
        $this->assertSame(7.70, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-11-01');
        $this->assertSame('川村正輝', $response['bracket1RacerName']);
        $this->assertSame(6.65, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.08, $response['bracket1LapTime']);
        $this->assertSame(5.72, $response['bracket1TurnTime']);
        $this->assertSame(7.72, $response['bracket1StraightTime']);
        $this->assertSame('小林文彦', $response['bracket2RacerName']);
        $this->assertSame(6.68, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.90, $response['bracket2LapTime']);
        $this->assertSame(5.65, $response['bracket2TurnTime']);
        $this->assertSame(7.80, $response['bracket2StraightTime']);
        $this->assertSame('伊久間陽優', $response['bracket3RacerName']);
        $this->assertSame(6.73, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.42, $response['bracket3LapTime']);
        $this->assertSame(5.64, $response['bracket3TurnTime']);
        $this->assertSame(7.75, $response['bracket3StraightTime']);
        $this->assertSame('梶野学志', $response['bracket4RacerName']);
        $this->assertSame(6.73, $response['bracket4ExhibitionTime']);
        $this->assertSame(38.31, $response['bracket4LapTime']);
        $this->assertSame(5.53, $response['bracket4TurnTime']);
        $this->assertSame(7.85, $response['bracket4StraightTime']);
        $this->assertSame('村松将平', $response['bracket5RacerName']);
        $this->assertSame(6.72, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.34, $response['bracket5LapTime']);
        $this->assertSame(5.55, $response['bracket5TurnTime']);
        $this->assertSame(7.73, $response['bracket5StraightTime']);
        $this->assertSame('石田章央', $response['bracket6RacerName']);
        $this->assertSame(6.75, $response['bracket6ExhibitionTime']);
        $this->assertSame(38.11, $response['bracket6LapTime']);
        $this->assertSame(5.86, $response['bracket6TurnTime']);
        $this->assertSame(7.73, $response['bracket6StraightTime']);
    }
}
