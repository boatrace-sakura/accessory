<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium17 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-miyajima.com';
        $crawlerFormat = '%s/race_common/require/kaisai_reload.php?date=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('POST', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/table[6]/tbody';

        foreach (range(1, 6) as $bracket) {
            foreach (range(6, 8) as $key) {
                $response[
                    match ($key) {
                        6 => 'bracket' . $bracket . 'LapTime',
                        7 => 'bracket' . $bracket . 'TurnTime',
                        8 => 'bracket' . $bracket . 'StraightTime',
                    }
                ] = (float) $crawler->filterXPath(
                    sprintf('%s/tr[%d]/td[%d]', $baseXpath, $bracket * 2 + 1, $key)
                )->text();
            }
        }

        return $response;
    }
}
