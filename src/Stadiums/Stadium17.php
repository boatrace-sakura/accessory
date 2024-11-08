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
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace(
                $crawler->filterXPath(
                    sprintf('%s/tr[%d]/td[2]/p[1]/a', $baseXpath, $bracket * 2 + 1)
                )->text()
            );

            foreach (range(5, 8) as $key) {
                $response[
                    match ($key) {
                        5 => 'bracket' . $bracket . 'ExhibitionTime',
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
