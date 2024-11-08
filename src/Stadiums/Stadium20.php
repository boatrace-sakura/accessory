<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium20 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://nikkansports.raceyosou.jp';
        $crawlerFormat = '%s/boatrace/wakamatsu/%s/%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.names > td', '.hint']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace($times['.names > td'][$bracket - 1]);
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) $times['.hint'][$bracket - 1];
            $response['bracket' . $bracket . 'LapTime'] = (float) $times['.hint'][$bracket + 5];
            $response['bracket' . $bracket . 'StraightTime'] = (float) $times['.hint'][$bracket + 5 + 6];
        }

        return $response;
    }
}
