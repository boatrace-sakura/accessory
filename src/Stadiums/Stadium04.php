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
        $times = $this->filterByKeys($crawler, ['td.name', '.choku_top', '.data']);
        $chunkTimes = array_chunk(array_slice($times['.data'], 3), 6);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = preg_split('/\d{4}/u', $this->removeSpace($times['td.name'][$bracket - 1] ?? ''))[0];
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) ($times['.choku_top'][$bracket * 2 - 2] ?? 0);
            $response['bracket' . $bracket . 'LapTime'] = (float) ($chunkTimes[$bracket - 1][0] ?? 0);
            $response['bracket' . $bracket . 'TurnTime'] = (float) ($chunkTimes[$bracket - 1][1] ?? 0);
            $response['bracket' . $bracket . 'StraightTime'] = (float) ($chunkTimes[$bracket - 1][2] ?? 0);
            $response['bracket' . $bracket . 'LapTimeSpeed'] = (float) ($chunkTimes[$bracket - 1][3] ?? 0);
            $response['bracket' . $bracket . 'TurnTimeSpeed'] = (float) ($chunkTimes[$bracket - 1][4] ?? 0);
            $response['bracket' . $bracket . 'StraightTimeSpeed'] = (float) ($chunkTimes[$bracket - 1][5] ?? 0);
        }

        return $response;
    }
}
