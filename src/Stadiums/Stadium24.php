<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium24 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://omurakyotei.jp';
        $crawlerFormat = '%s/yosou/include/new_top_iframe_chokuzen_2.php?day=%s&race=1&race=%02d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.tei1', '.tei2', '.tei3', '.tei4', '.tei5', '.tei6']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'LapTime'] = (float) $times['.tei' . $bracket][4];
            $response['bracket' . $bracket . 'TurnTime'] = (float) $times['.tei' . $bracket][5];
            $response['bracket' . $bracket . 'StraightTime'] = (float) $times['.tei' . $bracket][6];
        }

        return $response;
    }
}
