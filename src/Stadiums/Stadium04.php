<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium04 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.heiwajima.gr.jp';
        $crawlerFormat = '%s/asp/tbk/textvision/text/04%02dsttenji.htm';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKey($crawler, '.data');
        $chunkTimes = array_chunk(array_slice($times, 3), 6);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'LapTime'] = $chunkTimes[$bracket - 1][0];
            $response['bracket' . $bracket . 'TurnTime'] = $chunkTimes[$bracket - 1][1];
            $response['bracket' . $bracket . 'StraightTime'] = $chunkTimes[$bracket - 1][2];
            $response['bracket' . $bracket . 'LapTimeSpeed'] = $chunkTimes[$bracket - 1][3];
            $response['bracket' . $bracket . 'TurnTimeSpeed'] = $chunkTimes[$bracket - 1][4];
            $response['bracket' . $bracket . 'StraightTimeSpeed'] = $chunkTimes[$bracket - 1][5];
        }

        return $response;
    }
}
