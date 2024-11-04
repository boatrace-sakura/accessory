<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium22 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-fukuoka.com';
        $crawlerFormat = '%s/modules/yosou/tenji_info.php?day=%s&race=%d&if=1&nowmode=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.col7', '.col8', '.col9']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'LapTime'] = (float) $times['.col7'][$bracket];
            $response['bracket' . $bracket . 'TurnTime'] = (float) $times['.col8'][$bracket];
            $response['bracket' . $bracket . 'StraightTime'] = (float) $times['.col9'][$bracket];
        }

        return $response;
    }
}
