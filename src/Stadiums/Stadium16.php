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
        $times = $this->filterByKey($crawler, '.control');
        $chunkTimes = array_chunk($times, 5);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'LapTime'] = $chunkTimes[$bracket - 1][2];
            $response['bracket' . $bracket . 'TurnTime'] = $chunkTimes[$bracket - 1][3];
            $response['bracket' . $bracket . 'StraightTime'] = $chunkTimes[$bracket - 1][4];
        }

        return $response;
    }
}
