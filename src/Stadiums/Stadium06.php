<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium06 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'http://www.boatrace-hamanako.jp';
        $crawlerFormat = '%s/modules/yosou/cyokuzen.php?page=cyokuzen&button=3&day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKey($crawler, '.col-data');
        $chunkTimes = array_chunk(array_slice($times, 11), 10);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'LapTime'] = $chunkTimes[$bracket - 1][6];
            $response['bracket' . $bracket . 'TurnTime'] = $chunkTimes[$bracket - 1][7];
            $response['bracket' . $bracket . 'StraightTime'] = $chunkTimes[$bracket - 1][8];
        }

        return $response;
    }
}
