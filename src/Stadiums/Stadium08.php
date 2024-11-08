<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium08 extends BaseStadium implements StadiumInterface
{
    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $baseUrl = 'https://www.boatrace-tokoname.jp';
        $crawlerFormat = '%s/raceguide/kyogi15/%d/';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.racer', '.time']);
        $chunkTimes = array_chunk($times['.time'], 4);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = preg_split('/\d{4}/u', $this->removeSpace($times['.racer'][$bracket - 1]))[0];
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) $chunkTimes[$bracket - 1][0];
            $response['bracket' . $bracket . 'LapTime'] = (float) $chunkTimes[$bracket - 1][1];
            $response['bracket' . $bracket . 'TurnTime'] = (float) $chunkTimes[$bracket - 1][2];
            $response['bracket' . $bracket . 'StraightTime'] = (float) $chunkTimes[$bracket - 1][3];
        }

        return $response;
    }
}
