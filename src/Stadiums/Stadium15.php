<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium15 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.marugameboat.jp';
        $crawlerFormat = '%s/asp/kyogi/15/pc/yoso05%02d.htm?slide=2';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[2]/div/div/div[3]/table';

        foreach (range(1, 6) as $bracket) {
            foreach (range(6, 8) as $key) {
                $response[
                    match ($key) {
                        6 => 'bracket' . $bracket . 'LapTime',
                        7 => 'bracket' . $bracket . 'TurnTime',
                        8 => 'bracket' . $bracket . 'StraightTime',
                    }
                ] = (float) $crawler->filterXPath(
                    sprintf('%s/tbody[%d]/tr[1]/td[%d]', $baseXpath, $bracket, $key)
                )->text();
            }
        }

        return $response;
    }
}
