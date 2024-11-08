<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium12 extends BaseStadium implements StadiumInterface
{
    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $baseUrl = 'https://www.boatrace-suminoe.jp';
        $crawlerFormat = '%s/asp/kyogi/12/pc/st02%02d.htm';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[1]/table[1]';

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace(
                $crawler->filterXPath(
                    sprintf('%s/tbody[%d]/tr[1]/td[2]/ul/li[2]/a', $baseXpath, $bracket)
                )->text()
            );

            foreach (range(5, 7) as $key) {
                $response[
                    match ($key) {
                        5 => 'bracket' . $bracket . 'ExhibitionTime',
                        6 => 'bracket' . $bracket . 'LapTime',
                        7 => 'bracket' . $bracket . 'TurnTime',
                    }
                ] = (float) $crawler->filterXPath(
                    sprintf('%s/tbody[%d]/tr[1]/td[%d]', $baseXpath, $bracket, $key)
                )->text();
            }
        }

        return $response;
    }
}
