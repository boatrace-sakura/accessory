<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium16;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium16Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium16
     */
    protected Stadium16 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium16(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('浮田圭浩', $response['bracket1RacerName']);
        $this->assertSame(6.70, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket1LapTime']);
        $this->assertSame(5.85, $response['bracket1TurnTime']);
        $this->assertSame(6.53, $response['bracket1StraightTime']);
        $this->assertSame('阪本勇介', $response['bracket2RacerName']);
        $this->assertSame(6.64, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.63, $response['bracket2LapTime']);
        $this->assertSame(5.37, $response['bracket2TurnTime']);
        $this->assertSame(6.63, $response['bracket2StraightTime']);
        $this->assertSame('福田理', $response['bracket3RacerName']);
        $this->assertSame(6.78, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.92, $response['bracket3LapTime']);
        $this->assertSame(5.53, $response['bracket3TurnTime']);
        $this->assertSame(6.77, $response['bracket3StraightTime']);
        $this->assertSame('峰重力也', $response['bracket4RacerName']);
        $this->assertSame(6.79, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.38, $response['bracket4LapTime']);
        $this->assertSame(5.63, $response['bracket4TurnTime']);
        $this->assertSame(6.67, $response['bracket4StraightTime']);
        $this->assertSame('立間充宏', $response['bracket5RacerName']);
        $this->assertSame(6.72, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.50, $response['bracket5LapTime']);
        $this->assertSame(5.60, $response['bracket5TurnTime']);
        $this->assertSame(6.63, $response['bracket5StraightTime']);
        $this->assertSame('山下昂大', $response['bracket6RacerName']);
        $this->assertSame(6.82, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.70, $response['bracket6LapTime']);
        $this->assertSame(5.77, $response['bracket6TurnTime']);
        $this->assertSame(6.77, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 11, date: '2024-01-01');
        $this->assertSame('藤原啓史朗', $response['bracket1RacerName']);
        $this->assertSame(6.80, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.10, $response['bracket1LapTime']);
        $this->assertSame(6.30, $response['bracket1TurnTime']);
        $this->assertSame(6.53, $response['bracket1StraightTime']);
        $this->assertSame('林祐介', $response['bracket2RacerName']);
        $this->assertSame(6.78, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.13, $response['bracket2LapTime']);
        $this->assertSame(6.13, $response['bracket2TurnTime']);
        $this->assertSame(6.57, $response['bracket2StraightTime']);
        $this->assertSame('岡瀬正人', $response['bracket3RacerName']);
        $this->assertSame(6.83, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.93, $response['bracket3LapTime']);
        $this->assertSame(5.67, $response['bracket3TurnTime']);
        $this->assertSame(6.83, $response['bracket3StraightTime']);
        $this->assertSame('入海馨', $response['bracket4RacerName']);
        $this->assertSame(6.79, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.20, $response['bracket4LapTime']);
        $this->assertSame(5.90, $response['bracket4TurnTime']);
        $this->assertSame(6.70, $response['bracket4StraightTime']);
        $this->assertSame('渡邉和将', $response['bracket5RacerName']);
        $this->assertSame(6.77, $response['bracket5ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket5LapTime']);
        $this->assertSame(5.67, $response['bracket5TurnTime']);
        $this->assertSame(6.87, $response['bracket5StraightTime']);
        $this->assertSame('平尾崇典', $response['bracket6RacerName']);
        $this->assertSame(6.72, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.20, $response['bracket6LapTime']);
        $this->assertSame(6.13, $response['bracket6TurnTime']);
        $this->assertSame(6.67, $response['bracket6StraightTime']);
    }
}
