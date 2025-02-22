<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium21;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium21Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium21
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
        $this->assertSame('新開航', $response['bracket_1_racer_name']);
        $this->assertSame(6.63, $response['bracket_1_exhibition_time']);
        $this->assertSame(35.62, $response['bracket_1_lap_time']);
        $this->assertSame(7.66, $response['bracket_1_turn_time']);
        $this->assertSame(7.30, $response['bracket_1_straight_time']);
        $this->assertSame('松尾宣邦', $response['bracket_2_racer_name']);
        $this->assertSame(6.75, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.86, $response['bracket_2_lap_time']);
        $this->assertSame(8.11, $response['bracket_2_turn_time']);
        $this->assertSame(7.42, $response['bracket_2_straight_time']);
        $this->assertSame('中渡修作', $response['bracket_3_racer_name']);
        $this->assertSame(6.73, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.99, $response['bracket_3_lap_time']);
        $this->assertSame(8.09, $response['bracket_3_turn_time']);
        $this->assertSame(7.44, $response['bracket_3_straight_time']);
        $this->assertSame('羽野諒', $response['bracket_4_racer_name']);
        $this->assertSame(6.73, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.89, $response['bracket_4_lap_time']);
        $this->assertSame(8.22, $response['bracket_4_turn_time']);
        $this->assertSame(7.39, $response['bracket_4_straight_time']);
        $this->assertSame('坂井滉哉', $response['bracket_5_racer_name']);
        $this->assertSame(6.71, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.41, $response['bracket_5_lap_time']);
        $this->assertSame(8.21, $response['bracket_5_turn_time']);
        $this->assertSame(7.44, $response['bracket_5_straight_time']);
        $this->assertSame('前田健太郎', $response['bracket_6_racer_name']);
        $this->assertSame(6.79, $response['bracket_6_exhibition_time']);
        $this->assertSame(36.83, $response['bracket_6_lap_time']);
        $this->assertSame(7.98, $response['bracket_6_turn_time']);
        $this->assertSame(7.51, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('中亮太', $response['bracket_1_racer_name']);
        $this->assertSame(6.71, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.04, $response['bracket_1_lap_time']);
        $this->assertSame(7.68, $response['bracket_1_turn_time']);
        $this->assertSame(7.36, $response['bracket_1_straight_time']);
        $this->assertSame('小川広大', $response['bracket_2_racer_name']);
        $this->assertSame(6.72, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.88, $response['bracket_2_lap_time']);
        $this->assertSame(8.06, $response['bracket_2_turn_time']);
        $this->assertSame(7.43, $response['bracket_2_straight_time']);
        $this->assertSame('松尾基成', $response['bracket_3_racer_name']);
        $this->assertSame(6.66, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.89, $response['bracket_3_lap_time']);
        $this->assertSame(8.09, $response['bracket_3_turn_time']);
        $this->assertSame(7.39, $response['bracket_3_straight_time']);
        $this->assertSame('塩田北斗', $response['bracket_4_racer_name']);
        $this->assertSame(6.62, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.61, $response['bracket_4_lap_time']);
        $this->assertSame(8.21, $response['bracket_4_turn_time']);
        $this->assertSame(7.32, $response['bracket_4_straight_time']);
        $this->assertSame('嘉手苅徹哉', $response['bracket_5_racer_name']);
        $this->assertSame(6.65, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.53, $response['bracket_5_lap_time']);
        $this->assertSame(8.37, $response['bracket_5_turn_time']);
        $this->assertSame(7.40, $response['bracket_5_straight_time']);
        $this->assertSame('田中京介', $response['bracket_6_racer_name']);
        $this->assertSame(6.68, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.33, $response['bracket_6_lap_time']);
        $this->assertSame(8.25, $response['bracket_6_turn_time']);
        $this->assertSame(7.43, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('新開航', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('変わらずいい。枠番で調整をする', $response['bracket_1_racer_comment_1']);
        $this->assertSame('松尾宣邦', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('直線は甘いが出足は上向いている', $response['bracket_2_racer_comment_1']);
        $this->assertSame('中渡修作', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('※バランスがよく中堅上位に到達', $response['bracket_3_racer_comment_1']);
        $this->assertSame('羽野諒', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('ペラとバルブ調整で体感が上向き', $response['bracket_4_racer_comment_1']);
        $this->assertSame('坂井滉哉', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('下がる感じはないが出足が良くない', $response['bracket_5_racer_comment_1']);
        $this->assertSame('前田健太郎', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('伸びが来ない。ターン重視でいく', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('中亮太', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('いい仕上がり。伸び、回り足がいい', $response['bracket_1_racer_comment_1']);
        $this->assertSame('小川広大', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('S届いていたし乗った感じ良かった', $response['bracket_2_racer_comment_1']);
        $this->assertSame('松尾基成', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('足はいいけど乗り味や押しが甘い', $response['bracket_3_racer_comment_1']);
        $this->assertSame('塩田北斗', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('レース失敗だけで足は全然いいです', $response['bracket_4_racer_comment_1']);
        $this->assertSame('嘉手苅徹哉', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('伸びはいいけどターンが良くない', $response['bracket_5_racer_comment_1']);
        $this->assertSame('田中京介', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('出足寄りにして出口で押していた', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber1AndDate20240101(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('記者予想 前日コース', $response['reporter_yesterday_course_label']);
        $this->assertSame('123/456', $response['reporter_yesterday_course']);
        $this->assertSame('記者予想 前日フォーカス 2連単', $response['reporter_yesterday_focus_exacta_label']);
        $this->assertSame(['1=3', '1-2', '1-4'], $response['reporter_yesterday_focus_exacta']);
        $this->assertSame('記者予想 前日フォーカス 3連単', $response['reporter_yesterday_focus_trifecta_label']);
        $this->assertSame(['1=3-2', '1-3-4', '1-2-3', '1-2-4'], $response['reporter_yesterday_focus_trifecta']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('新年一発目は①新開の逃走で決まり。快速機と組む③中渡と差し粘る②松尾の連争いに、日に日に照準を合わせてきている④羽野が合流する。', $response['reporter_yesterday_comment']);
        $this->assertSame('JLC予想 前日フォーカス', $response['jlc_yesterday_focus_label']);
        $this->assertSame(['1-2-3', '1-3-2', '1-2-4', '1-3-4', '1-4-2'], $response['jlc_yesterday_focus']);
        $this->assertSame('JLC予想 前日信頼度', $response['jlc_yesterday_reliability_label']);
        $this->assertSame('85%', $response['jlc_yesterday_reliability']);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber2AndDate20240101(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('記者予想 前日コース', $response['reporter_yesterday_course_label']);
        $this->assertSame('123/456', $response['reporter_yesterday_course']);
        $this->assertSame('記者予想 前日フォーカス 2連単', $response['reporter_yesterday_focus_exacta_label']);
        $this->assertSame(['1=4', '1-3', '1-6'], $response['reporter_yesterday_focus_exacta']);
        $this->assertSame('記者予想 前日フォーカス 3連単', $response['reporter_yesterday_focus_trifecta_label']);
        $this->assertSame(['1=4-3', '1-4-6', '1-3-4', '1-3-6'], $response['reporter_yesterday_focus_trifecta']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('インに構える①中と、カド自在に攻める④塩田の一騎打ちムードだが、安定感がある③松尾も侮れない存在。好出足がある⑥田中は最内から。', $response['reporter_yesterday_comment']);
        $this->assertSame('JLC予想 前日フォーカス', $response['jlc_yesterday_focus_label']);
        $this->assertSame(['4-1-3', '4-1-6', '1-4-3', '1-4-6', '4-3-1'], $response['jlc_yesterday_focus']);
        $this->assertSame('JLC予想 前日信頼度', $response['jlc_yesterday_reliability_label']);
        $this->assertSame('85%', $response['jlc_yesterday_reliability']);
    }
}
