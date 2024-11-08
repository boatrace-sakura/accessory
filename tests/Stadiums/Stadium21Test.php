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
        $this->assertSame('新開航', $response['bracket1RacerName']);
        $this->assertSame(6.63, $response['bracket1ExhibitionTime']);
        $this->assertSame(35.62, $response['bracket1LapTime']);
        $this->assertSame(7.66, $response['bracket1TurnTime']);
        $this->assertSame(7.30, $response['bracket1StraightTime']);
        $this->assertSame('松尾宣邦', $response['bracket2RacerName']);
        $this->assertSame(6.75, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.86, $response['bracket2LapTime']);
        $this->assertSame(8.11, $response['bracket2TurnTime']);
        $this->assertSame(7.42, $response['bracket2StraightTime']);
        $this->assertSame('中渡修作', $response['bracket3RacerName']);
        $this->assertSame(6.73, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.99, $response['bracket3LapTime']);
        $this->assertSame(8.09, $response['bracket3TurnTime']);
        $this->assertSame(7.44, $response['bracket3StraightTime']);
        $this->assertSame('羽野諒', $response['bracket4RacerName']);
        $this->assertSame(6.73, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.89, $response['bracket4LapTime']);
        $this->assertSame(8.22, $response['bracket4TurnTime']);
        $this->assertSame(7.39, $response['bracket4StraightTime']);
        $this->assertSame('坂井滉哉', $response['bracket5RacerName']);
        $this->assertSame(6.71, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.41, $response['bracket5LapTime']);
        $this->assertSame(8.21, $response['bracket5TurnTime']);
        $this->assertSame(7.44, $response['bracket5StraightTime']);
        $this->assertSame('前田健太郎', $response['bracket6RacerName']);
        $this->assertSame(6.79, $response['bracket6ExhibitionTime']);
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
        $this->assertSame('中亮太', $response['bracket1RacerName']);
        $this->assertSame(6.71, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.04, $response['bracket1LapTime']);
        $this->assertSame(7.68, $response['bracket1TurnTime']);
        $this->assertSame(7.36, $response['bracket1StraightTime']);
        $this->assertSame('小川広大', $response['bracket2RacerName']);
        $this->assertSame(6.72, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.88, $response['bracket2LapTime']);
        $this->assertSame(8.06, $response['bracket2TurnTime']);
        $this->assertSame(7.43, $response['bracket2StraightTime']);
        $this->assertSame('松尾基成', $response['bracket3RacerName']);
        $this->assertSame(6.66, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.89, $response['bracket3LapTime']);
        $this->assertSame(8.09, $response['bracket3TurnTime']);
        $this->assertSame(7.39, $response['bracket3StraightTime']);
        $this->assertSame('塩田北斗', $response['bracket4RacerName']);
        $this->assertSame(6.62, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.61, $response['bracket4LapTime']);
        $this->assertSame(8.21, $response['bracket4TurnTime']);
        $this->assertSame(7.32, $response['bracket4StraightTime']);
        $this->assertSame('嘉手苅徹哉', $response['bracket5RacerName']);
        $this->assertSame(6.65, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.53, $response['bracket5LapTime']);
        $this->assertSame(8.37, $response['bracket5TurnTime']);
        $this->assertSame(7.40, $response['bracket5StraightTime']);
        $this->assertSame('田中京介', $response['bracket6RacerName']);
        $this->assertSame(6.68, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.33, $response['bracket6LapTime']);
        $this->assertSame(8.25, $response['bracket6TurnTime']);
        $this->assertSame(7.43, $response['bracket6StraightTime']);
    }
}
