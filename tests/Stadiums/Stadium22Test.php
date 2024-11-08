<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium22;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium22Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium22
     */
    protected Stadium22 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium22(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-03');
        $this->assertSame('益田啓司', $response['bracket1RacerName']);
        $this->assertSame(6.87, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.49, $response['bracket1LapTime']);
        $this->assertSame(5.53, $response['bracket1TurnTime']);
        $this->assertSame(7.67, $response['bracket1StraightTime']);
        $this->assertSame('篠原飛翔', $response['bracket2RacerName']);
        $this->assertSame(6.84, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.64, $response['bracket2LapTime']);
        $this->assertSame(5.65, $response['bracket2TurnTime']);
        $this->assertSame(7.53, $response['bracket2StraightTime']);
        $this->assertSame('藤森陸斗', $response['bracket3RacerName']);
        $this->assertSame(6.86, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.17, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(7.50, $response['bracket3StraightTime']);
        $this->assertSame('森晋太郎', $response['bracket4RacerName']);
        $this->assertSame(6.90, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket4LapTime']);
        $this->assertSame(5.70, $response['bracket4TurnTime']);
        $this->assertSame(7.60, $response['bracket4StraightTime']);
        $this->assertSame('梶原正', $response['bracket5RacerName']);
        $this->assertSame(6.93, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.50, $response['bracket5LapTime']);
        $this->assertSame(5.80, $response['bracket5TurnTime']);
        $this->assertSame(7.77, $response['bracket5StraightTime']);
        $this->assertSame('桂林寛', $response['bracket6RacerName']);
        $this->assertSame(6.88, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.57, $response['bracket6LapTime']);
        $this->assertSame(5.73, $response['bracket6TurnTime']);
        $this->assertSame(7.63, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 7, date: '2024-01-03');
        $this->assertSame('梶原正', $response['bracket1RacerName']);
        $this->assertSame(6.85, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.17, $response['bracket1LapTime']);
        $this->assertSame(5.93, $response['bracket1TurnTime']);
        $this->assertSame(7.73, $response['bracket1StraightTime']);
        $this->assertSame('安東幸治', $response['bracket2RacerName']);
        $this->assertSame(6.85, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.20, $response['bracket2LapTime']);
        $this->assertSame(5.67, $response['bracket2TurnTime']);
        $this->assertSame(7.60, $response['bracket2StraightTime']);
        $this->assertSame('松本真広', $response['bracket3RacerName']);
        $this->assertSame(6.79, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.30, $response['bracket3LapTime']);
        $this->assertSame(5.83, $response['bracket3TurnTime']);
        $this->assertSame(7.53, $response['bracket3StraightTime']);
        $this->assertSame('原田才一郎', $response['bracket4RacerName']);
        $this->assertSame(6.80, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.53, $response['bracket4LapTime']);
        $this->assertSame(5.61, $response['bracket4TurnTime']);
        $this->assertSame(7.63, $response['bracket4StraightTime']);
        $this->assertSame('奈須啓太', $response['bracket5RacerName']);
        $this->assertSame(6.91, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.93, $response['bracket5LapTime']);
        $this->assertSame(5.73, $response['bracket5TurnTime']);
        $this->assertSame(7.67, $response['bracket5StraightTime']);
        $this->assertSame('石川真二', $response['bracket6RacerName']);
        $this->assertSame(6.93, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.80, $response['bracket6LapTime']);
        $this->assertSame(5.57, $response['bracket6TurnTime']);
        $this->assertSame(7.60, $response['bracket6StraightTime']);
    }
}
