<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium18;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium18Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium18
     */
    protected Stadium18 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium18(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('佐々木完太', $response['bracket1RacerName']);
        $this->assertSame(6.86, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket1LapTime']);
        $this->assertSame(11.33, $response['bracket1TurnTime']);
        $this->assertSame('表健太', $response['bracket2RacerName']);
        $this->assertSame(6.86, $response['bracket2ExhibitionTime']);
        $this->assertSame(38.21, $response['bracket2LapTime']);
        $this->assertSame(12.10	, $response['bracket2TurnTime']);
        $this->assertSame('野相弘司', $response['bracket3RacerName']);
        $this->assertSame(6.90	, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.71, $response['bracket3LapTime']);
        $this->assertSame(11.65	, $response['bracket3TurnTime']);
        $this->assertSame('胡本悟志', $response['bracket4RacerName']);
        $this->assertSame(6.92, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.37, $response['bracket4LapTime']);
        $this->assertSame(11.66, $response['bracket4TurnTime']);
        $this->assertSame('谷口知優', $response['bracket5RacerName']);
        $this->assertSame(6.88, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.40, $response['bracket5LapTime']);
        $this->assertSame(11.66, $response['bracket5TurnTime']);
        $this->assertSame('森智哉', $response['bracket6RacerName']);
        $this->assertSame(6.92, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.40, $response['bracket6LapTime']);
        $this->assertSame(11.63, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('島川光男', $response['bracket1RacerName']);
        $this->assertSame(6.87, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.91, $response['bracket1LapTime']);
        $this->assertSame(11.42, $response['bracket1TurnTime']);
        $this->assertSame('木村光宏', $response['bracket2RacerName']);
        $this->assertSame(6.87, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.77, $response['bracket2LapTime']);
        $this->assertSame(	11.86	, $response['bracket2TurnTime']);
        $this->assertSame('柳瀬興志', $response['bracket3RacerName']);
        $this->assertSame(6.85, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.95, $response['bracket3LapTime']);
        $this->assertSame(11.43	, $response['bracket3TurnTime']);
        $this->assertSame('山崎祥', $response['bracket4RacerName']);
        $this->assertSame(6.88, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.55, $response['bracket4LapTime']);
        $this->assertSame(11.77, $response['bracket4TurnTime']);
        $this->assertSame('笹木香吾', $response['bracket5RacerName']);
        $this->assertSame(6.84, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.17, $response['bracket5LapTime']);
        $this->assertSame(11.55, $response['bracket5TurnTime']);
        $this->assertSame('竹田辰也', $response['bracket6RacerName']);
        $this->assertSame(6.82, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.00, $response['bracket6LapTime']);
        $this->assertSame(11.26, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('佐々木完太', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('変わらず厳しい。', $response['bracket1RacerComment1']);
        $this->assertSame('表健太', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('強風でスタートが難しい。', $response['bracket2RacerComment1']);
        $this->assertSame('野相弘司', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('ターン回りの方がいい。', $response['bracket3RacerComment1']);
        $this->assertSame('胡本悟志', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('回り足は変わらずいいと思う。', $response['bracket4RacerComment1']);
        $this->assertSame('谷口知優', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('いい調整ができている。', $response['bracket5RacerComment1']);
        $this->assertSame('森智哉', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('やっと普通になったと思う。', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('島川光男', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('代わり映えしない。', $response['bracket1RacerComment1']);
        $this->assertSame('木村光宏', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('エンジンに助けられている。', $response['bracket2RacerComment1']);
        $this->assertSame('柳瀬興志', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('伸びはいい。あとは乗り心地。', $response['bracket3RacerComment1']);
        $this->assertSame('山崎祥', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('追い付かれ気味だった。', $response['bracket4RacerComment1']);
        $this->assertSame('笹木香吾', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('気になるところはない。', $response['bracket5RacerComment1']);
        $this->assertSame('竹田辰也', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('全部の足がいい状態。', $response['bracket6RacerComment1']);
    }
}
