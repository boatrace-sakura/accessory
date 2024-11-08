<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium02 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-toda.jp';
        $crawlerFormat = '%s/xml/kaisai/%s/race_table_original_%02d.xml';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->xmlHttpRequest('GET', $crawlerUrl);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace(
                $crawler->filterXPath(
                    sprintf('descendant-or-self::record[%d]/name', $bracket)
                )->text()
            );

            foreach (['ttime', 'rnd', 'cnr', 'str'] as $key) {
                $response[
                    match ($key) {
                        'ttime' => 'bracket' . $bracket . 'ExhibitionTime',
                        'rnd' => 'bracket' . $bracket . 'LapTime',
                        'cnr' => 'bracket' . $bracket . 'TurnTime',
                        'str' => 'bracket' . $bracket . 'StraightTime',
                    }
                ] = (float) $crawler->filterXPath(
                    sprintf('descendant-or-self::record[%d]/%s', $bracket, $key)
                )->text();
            }
        }

        return $response;
    }
}
