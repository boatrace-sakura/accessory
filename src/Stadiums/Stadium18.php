<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium18 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-tokuyama.jp';
        $crawlerFormat = '%s/modules/yosou/tenji.php?day=%s&race=%d&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.col11', '.col12']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'LapTime'] = (float) $times['.col11'][$bracket + 1];
            $response['bracket' . $bracket . 'TurnTime'] = (float) $times['.col12'][$bracket - 1];
        }

        return $response;
    }
}
