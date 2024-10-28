<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium11 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-biwako.jp';
        $crawlerFormat = '%s/modules/yosou/cyokuzen.php?day=%s&race=%d&if=1&kind=2';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.col6', '.col7', '.col8']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'LapTime'] = $times['.col6'][$bracket];
            $response['bracket' . $bracket . 'TurnTime'] = $times['.col7'][$bracket];
            $response['bracket' . $bracket . 'StraightTime'] = $times['.col8'][$bracket];
        }

        return $response;
    }
}
