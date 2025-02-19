<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium11;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium11Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium11
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
        $this->assertSame('山田晃大', $response['bracket_1_racer_name']);
        $this->assertSame(6.77, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.90, $response['bracket_1_lap_time']);
        $this->assertSame(5.28, $response['bracket_1_turn_time']);
        $this->assertSame(7.98, $response['bracket_1_straight_time']);
        $this->assertSame('市川健太', $response['bracket_2_racer_name']);
        $this->assertSame(6.65, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.67, $response['bracket_2_lap_time']);
        $this->assertSame(5.33, $response['bracket_2_turn_time']);
        $this->assertSame(7.88, $response['bracket_2_straight_time']);
        $this->assertSame('吉川晴人', $response['bracket_3_racer_name']);
        $this->assertSame(6.70, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.19, $response['bracket_3_lap_time']);
        $this->assertSame(5.40, $response['bracket_3_turn_time']);
        $this->assertSame(8.03, $response['bracket_3_straight_time']);
        $this->assertSame('和田操拓', $response['bracket_4_racer_name']);
        $this->assertSame(6.65, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.38, $response['bracket_4_lap_time']);
        $this->assertSame(5.77, $response['bracket_4_turn_time']);
        $this->assertSame(7.90, $response['bracket_4_straight_time']);
        $this->assertSame('川島圭司', $response['bracket_5_racer_name']);
        $this->assertSame(6.69, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.29, $response['bracket_5_lap_time']);
        $this->assertSame(5.61, $response['bracket_5_turn_time']);
        $this->assertSame(7.85, $response['bracket_5_straight_time']);
        $this->assertSame('吉田和仁', $response['bracket_6_racer_name']);
        $this->assertSame(6.66, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.28, $response['bracket_6_lap_time']);
        $this->assertSame(5.62, $response['bracket_6_turn_time']);
        $this->assertSame(7.68, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-03');
        $this->assertSame('松浦博人', $response['bracket_1_racer_name']);
        $this->assertSame(6.71, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.92, $response['bracket_1_lap_time']);
        $this->assertSame(5.25, $response['bracket_1_turn_time']);
        $this->assertSame(7.89, $response['bracket_1_straight_time']);
        $this->assertSame('藤井徹', $response['bracket_2_racer_name']);
        $this->assertSame(6.79, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.89, $response['bracket_2_lap_time']);
        $this->assertSame(5.61, $response['bracket_2_turn_time']);
        $this->assertSame(8.04, $response['bracket_2_straight_time']);
        $this->assertSame('鶴本崇文', $response['bracket_3_racer_name']);
        $this->assertSame(6.75, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.68, $response['bracket_3_lap_time']);
        $this->assertSame(5.72, $response['bracket_3_turn_time']);
        $this->assertSame(7.90, $response['bracket_3_straight_time']);
        $this->assertSame('吉川喜継', $response['bracket_4_racer_name']);
        $this->assertSame(6.73, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.35, $response['bracket_4_lap_time']);
        $this->assertSame(5.68, $response['bracket_4_turn_time']);
        $this->assertSame(7.87, $response['bracket_4_straight_time']);
        $this->assertSame('渡邉英児', $response['bracket_5_racer_name']);
        $this->assertSame(6.71, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.36, $response['bracket_5_lap_time']);
        $this->assertSame(5.84, $response['bracket_5_turn_time']);
        $this->assertSame(7.80, $response['bracket_5_straight_time']);
        $this->assertSame('香川陽太', $response['bracket_6_racer_name']);
        $this->assertSame(6.80, $response['bracket_6_exhibition_time']);
        $this->assertSame(36.71, $response['bracket_6_lap_time']);
        $this->assertSame(5.39, $response['bracket_6_turn_time']);
        $this->assertSame(8.02, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-03');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 2, date: '2024-01-03');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber1AndDate20240103(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 1, date: '2024-01-03');
        $this->assertSame('記者予想 前日コース', $response['reporter_yesterday_course_label']);
        $this->assertSame('123/456', $response['reporter_yesterday_course']);
        $this->assertSame('記者予想 前日フォーカス', $response['reporter_yesterday_focus_label']);
        $this->assertSame(['1=4-5', '1=4-6', '1-5-4', '1-6-4', '1-5-6'], $response['reporter_yesterday_focus']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('オープニングカードは山田が絶好枠。気合のインS攻勢で白星ゲットあるのみだ。ただ好調機を駆って前検好況な和田の一撃は逆転まで。川島、吉田が展開突いて', $response['reporter_yesterday_comment']);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber2AndDate20240103(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 2, date: '2024-01-03');
        $this->assertSame('記者予想 前日コース', $response['reporter_yesterday_course_label']);
        $this->assertSame('123/456', $response['reporter_yesterday_course']);
        $this->assertSame('記者予想 前日フォーカス', $response['reporter_yesterday_focus_label']);
        $this->assertSame(['3=4-1', '3=4-5', '3-1-4', '3-5-4', '3-1-5'], $response['reporter_yesterday_focus']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('前検気配は上々だった鶴本のセンター自在攻勢を本命視。吉川喜はその動きを見て逆転狙って。松浦は好枠を生かしたいところ。渡邉が巧腕さばき駆使して浮上へ', $response['reporter_yesterday_comment']);
    }
}
