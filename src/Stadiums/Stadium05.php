<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium05 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://boatrace-tamagawa.com';
        $crawlerFormat = '%s/modules/yosou/oriten.php?day=%s&race=%d&jo=05&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, [
            '.com-rname',
            '.col6',
            '.col7',
            '.col8',
            '.col9',
        ]);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeSpace($times['.com-rname'][$bracket - 1] ?? '');
            $response['bracket' . $bracket . 'ExhibitionTime'] =
                (float) ($times['.col6'][$bracket] ?? 0);
            $response['bracket' . $bracket . 'LapTime'] =
                (float) ($times['.col7'][$bracket] ?? 0);
            $response['bracket' . $bracket . 'TurnTime'] =
                (float) ($times['.col8'][$bracket] ?? 0);
            $response['bracket' . $bracket . 'StraightTime'] =
                (float) ($times['.col9'][$bracket] ?? 0);
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
        return [];
    }
}