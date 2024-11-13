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
        $times = $this->filterByKeys($crawler, ['.name', '.score']);
        $chunkTimes = array_chunk($times['.score'], 4);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace($times['.name'][$bracket] ?? '');
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) ($chunkTimes[$bracket][0] ?? 0);
            $response['bracket' . $bracket . 'LapTime'] = (float) ($chunkTimes[$bracket][1] ?? 0);
            $response['bracket' . $bracket . 'TurnTime'] = (float) ($chunkTimes[$bracket][2] ?? 0);
            $response['bracket' . $bracket . 'StraightTime'] = (float) ($chunkTimes[$bracket][3] ?? 0);
        }

        return $response;
    }
}
