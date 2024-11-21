<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium06 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'http://www.boatrace-hamanako.jp';
        $crawlerFormat = '%s/modules/yosou/cyokuzen.php?page=cyokuzen&button=3&day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.com-rname', '.col-data']);
        $chunkTimes = array_chunk(array_slice($times['.col-data'], 11), 10);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace($times['.com-rname'][$bracket - 1] ?? '');
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) ($chunkTimes[$bracket - 1][5] ?? 0);
            $response['bracket' . $bracket . 'LapTime'] = (float) ($chunkTimes[$bracket - 1][6] ?? 0);
            $response['bracket' . $bracket . 'TurnTime'] = (float) ($chunkTimes[$bracket - 1][7] ?? 0);
            $response['bracket' . $bracket . 'StraightTime'] = (float) ($chunkTimes[$bracket - 1][8] ?? 0);
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
        $baseUrl = 'https://nikkansports.raceyosou.jp';
        $crawlerFormat = '%s/boatrace/hamanako/%s/%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, [
            '.comment_table > tr > th',
            '.comment_table > tr > td',
        ]);

        foreach (range(1, 6) as $bracket) {
            $pattern = '/(前日のコメント)(.+)(試運転コメント|１走目コメント|試運転記者の目|１走目記者の目)(.+)/u';
            $subject = $comments['.comment_table > tr > td'][$bracket - 1] ?? '';
            preg_match($pattern, $subject, $matches);

            if (count($matches) === 0) {
                $pattern = '/(前日のコメント)(.+)/u';
                preg_match($pattern, $subject, $matches);
            }

            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeSpace($comments['.comment_table > tr > th'][$bracket - 1] ?? '');
            $response['bracket' . $bracket . 'RacerComment1Label'] = '前日コメント';
            $response['bracket' . $bracket . 'RacerComment1'] =
                $this->formatComment($matches[2] ?? '');

            if (count($matches) >= 5) {
                $response['bracket' . $bracket . 'RacerComment2Label'] =
                    $this->removeSpace($matches[3] ?? '');
                $response['bracket' . $bracket . 'RacerComment2'] =
                    $this->formatComment($matches[4] ?? '');
            }
        }

        return $response;
    }
}
