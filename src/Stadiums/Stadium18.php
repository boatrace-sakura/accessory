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
        $times = $this->filterByKeys($crawler, ['.com-rname', '.col10', '.col11', '.col12']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace($times['.com-rname'][$bracket - 1] ?? '');
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) ($times['.col10'][$bracket] ?? 0);
            $response['bracket' . $bracket . 'LapTime'] = (float) ($times['.col11'][$bracket + 1] ?? 0);
            $response['bracket' . $bracket . 'TurnTime'] = (float) ($times['.col12'][$bracket - 1] ?? 0);
        }

        return $response;
    }

    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function comments(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $baseUrl = 'https://www.boatrace-tokuyama.jp';
        $crawlerFormat = '%s/modules/yosou/syussou.php?day=%s&race=%d&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, ['.com-rname', '.comment']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeSpace($comments['.com-rname'][$bracket - 1] ?? '');
            $response['bracket' . $bracket . 'RacerComment1Label'] = '前日コメント';
            $response['bracket' . $bracket . 'RacerComment1'] =
                $this->formatComment($comments['.comment'][$bracket - 1] ?? '');
        }

        return $response;
    }
}