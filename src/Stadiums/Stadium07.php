<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium07 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.gamagori-kyotei.com';
        $crawlerFormat = '%s/asp/gamagori/kyogi/kyogihtml/time/time%s07%02d.htm';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKey($crawler, '.score');
        $chunkTimes = array_chunk($times, 4);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'LapTime'] = $chunkTimes[$bracket][1];
            $response['bracket' . $bracket . 'TurnTime'] = $chunkTimes[$bracket][2];
            $response['bracket' . $bracket . 'StraightTime'] = $chunkTimes[$bracket][3];
        }

        return $response;
    }
}
