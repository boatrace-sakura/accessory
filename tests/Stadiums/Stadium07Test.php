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
        $this->assertSame('吉田裕平', $response['bracket1RacerName']);
        $this->assertSame(6.63, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.10, $response['bracket1LapTime']);
        $this->assertSame(4.86, $response['bracket1TurnTime']);
        $this->assertSame(6.10, $response['bracket1StraightTime']);
        $this->assertSame('樅山拓馬', $response['bracket2RacerName']);
        $this->assertSame(6.76, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.09, $response['bracket2LapTime']);
        $this->assertSame(5.12, $response['bracket2TurnTime']);
        $this->assertSame(6.28, $response['bracket2StraightTime']);
        $this->assertSame('服部達哉', $response['bracket3RacerName']);
        $this->assertSame(6.69, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.72, $response['bracket3LapTime']);
        $this->assertSame(5.50, $response['bracket3TurnTime']);
        $this->assertSame(6.18, $response['bracket3StraightTime']);
        $this->assertSame('宇野博之', $response['bracket4RacerName']);
        $this->assertSame(6.74, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.12, $response['bracket4LapTime']);
        $this->assertSame(5.58, $response['bracket4TurnTime']);
        $this->assertSame(6.23, $response['bracket4StraightTime']);
        $this->assertSame('沼田大都', $response['bracket5RacerName']);
        $this->assertSame(6.66, $response['bracket5ExhibitionTime']);
        $this->assertSame(38.05, $response['bracket5LapTime']);
        $this->assertSame(5.84, $response['bracket5TurnTime']);
        $this->assertSame(5.93, $response['bracket5StraightTime']);
        $this->assertSame('仲道大輔', $response['bracket6RacerName']);
        $this->assertSame(6.58, $response['bracket6ExhibitionTime']);
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
        $this->assertSame('花田和明', $response['bracket1RacerName']);
        $this->assertSame(6.62, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.15, $response['bracket1LapTime']);
        $this->assertSame(5.05, $response['bracket1TurnTime']);
        $this->assertSame(6.30, $response['bracket1StraightTime']);
        $this->assertSame('丹下将', $response['bracket2RacerName']);
        $this->assertSame(6.72, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.78, $response['bracket2LapTime']);
        $this->assertSame(5.23, $response['bracket2TurnTime']);
        $this->assertSame(6.18, $response['bracket2StraightTime']);
        $this->assertSame('北川潤二', $response['bracket3RacerName']);
        $this->assertSame(6.73, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.68, $response['bracket3LapTime']);
        $this->assertSame(5.06, $response['bracket3TurnTime']);
        $this->assertSame(6.28, $response['bracket3StraightTime']);
        $this->assertSame('小西英輝', $response['bracket4RacerName']);
        $this->assertSame(6.73, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.60, $response['bracket4LapTime']);
        $this->assertSame(5.38, $response['bracket4TurnTime']);
        $this->assertSame(6.12, $response['bracket4StraightTime']);
        $this->assertSame('前田聖文', $response['bracket5RacerName']);
        $this->assertSame(6.73, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.11, $response['bracket5LapTime']);
        $this->assertSame(5.22, $response['bracket5TurnTime']);
        $this->assertSame(6.05, $response['bracket5StraightTime']);
        $this->assertSame('野中一平', $response['bracket6RacerName']);
        $this->assertSame(6.64, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.73, $response['bracket6LapTime']);
        $this->assertSame(5.11, $response['bracket6TurnTime']);
        $this->assertSame(6.18, $response['bracket6StraightTime']);
    }
}
