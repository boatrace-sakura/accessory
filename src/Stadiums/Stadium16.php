<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium16 extends BaseStadium implements StadiumInterface
{
    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $baseUrl = 'https://hj.kojima-yosou.com';
        $crawlerFormat = '%s/hjpc/index/%s/%02d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.ren-name', '.ren-tenji', '.control']);
        $chunkTimes = array_chunk($times['.control'], 5);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace($times['.ren-name'][$bracket - 1] ?? '');
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) ($times['.ren-tenji'][$bracket - 1] ?? 0);
            $response['bracket' . $bracket . 'LapTime'] = (float) ($chunkTimes[$bracket - 1][2] ?? 0);
            $response['bracket' . $bracket . 'TurnTime'] = (float) ($chunkTimes[$bracket - 1][3] ?? 0);
            $response['bracket' . $bracket . 'StraightTime'] = (float) ($chunkTimes[$bracket - 1][4] ?? 0);
        }

        return $response;
    }

    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function comments(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $baseUrl = 'https://hj.kojima-yosou.com';
        $crawlerFormat = '%s/hjpc/index/%s/%02d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, [
            'table.sensyu-comment > tbody > tr > td.profile-s > div.open-prof',
            'table.sensyu-comment > tbody > tr > td.comment',
        ]);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeSpace($comments['table.sensyu-comment > tbody > tr > td.profile-s > div.open-prof'][$bracket - 1]);
            $response['bracket' . $bracket . 'RacerComment1Label'] = '前日コメント';
            $response['bracket' . $bracket . 'RacerComment1'] =
                $this->formatComment($comments['table.sensyu-comment > tbody > tr > td.comment'][$bracket - 1]);
        }

        return $response;
    }
}