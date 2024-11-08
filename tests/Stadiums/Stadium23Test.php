<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium23;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium23Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium23
     */
    protected Stadium23 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium23(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-02');
        $this->assertSame('定松勇樹', $response['bracket1RacerName']);
        $this->assertSame(6.72, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.27, $response['bracket1LapTime']);
        $this->assertSame(5.20, $response['bracket1TurnTime']);
        $this->assertSame(7.80, $response['bracket1StraightTime']);
        $this->assertSame('山口高志', $response['bracket2RacerName']);
        $this->assertSame(6.73, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.07, $response['bracket2LapTime']);
        $this->assertSame(5.57, $response['bracket2TurnTime']);
        $this->assertSame(7.77, $response['bracket2StraightTime']);
        $this->assertSame('久富政弘', $response['bracket3RacerName']);
        $this->assertSame(6.73, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.43, $response['bracket3LapTime']);
        $this->assertSame(5.23, $response['bracket3TurnTime']);
        $this->assertSame(7.77, $response['bracket3StraightTime']);
        $this->assertSame('冨成謙児', $response['bracket4RacerName']);
        $this->assertSame(6.75, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.43, $response['bracket4LapTime']);
        $this->assertSame(5.80, $response['bracket4TurnTime']);
        $this->assertSame(7.80, $response['bracket4StraightTime']);
        $this->assertSame('吉田光', $response['bracket5RacerName']);
        $this->assertSame(6.75, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.57, $response['bracket5LapTime']);
        $this->assertSame(5.77, $response['bracket5TurnTime']);
        $this->assertSame(7.83, $response['bracket5StraightTime']);
        $this->assertSame('熊本英一', $response['bracket6RacerName']);
        $this->assertSame(6.69, $response['bracket6ExhibitionTime']);
        $this->assertSame(38.60, $response['bracket6LapTime']);
        $this->assertSame(6.23, $response['bracket6TurnTime']);
        $this->assertSame(8.03, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2024-01-02');
        $this->assertSame('小野勇作', $response['bracket1RacerName']);
        $this->assertSame(6.63, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.04, $response['bracket1LapTime']);
        $this->assertSame(5.43, $response['bracket1TurnTime']);
        $this->assertSame(8.02, $response['bracket1StraightTime']);
        $this->assertSame('熊本英一', $response['bracket2RacerName']);
        $this->assertSame(6.63, $response['bracket2ExhibitionTime']);
        $this->assertSame(38.46, $response['bracket2LapTime']);
        $this->assertSame(5.99, $response['bracket2TurnTime']);
        $this->assertSame(8.35, $response['bracket2StraightTime']);
        $this->assertSame('武富智亮', $response['bracket3RacerName']);
        $this->assertSame(6.67, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.71, $response['bracket3LapTime']);
        $this->assertSame(5.67, $response['bracket3TurnTime']);
        $this->assertSame(7.73, $response['bracket3StraightTime']);
        $this->assertSame('渡邊伸太郎', $response['bracket4RacerName']);
        $this->assertSame(6.68, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.39, $response['bracket4LapTime']);
        $this->assertSame(5.84, $response['bracket4TurnTime']);
        $this->assertSame(7.75, $response['bracket4StraightTime']);
        $this->assertSame('浦田晃嗣', $response['bracket5RacerName']);
        $this->assertSame(6.74, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.04, $response['bracket5LapTime']);
        $this->assertSame(5.57, $response['bracket5TurnTime']);
        $this->assertSame(7.82, $response['bracket5StraightTime']);
        $this->assertSame('松江秀徳', $response['bracket6RacerName']);
        $this->assertSame(6.66, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.72, $response['bracket6LapTime']);
        $this->assertSame(5.75, $response['bracket6TurnTime']);
        $this->assertSame(7.85, $response['bracket6StraightTime']);
    }
}
