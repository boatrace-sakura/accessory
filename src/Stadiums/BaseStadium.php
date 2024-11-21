<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

/**
 * @author shimomo
 */
abstract class BaseStadium
{
    /**
     * @param \Symfony\Component\BrowserKit\HttpBrowser  $httpBrowser
     */
    public function __construct(protected HttpBrowser $httpBrowser){}

    /**
     * @param  \Symfony\Component\DomCrawler\Crawler  $crawler
     * @param  string                                 $key
     * @return array
     */
    protected function filterByKey(Crawler $crawler, string $key): array
    {
        $response = [];

        $crawler->filter($key)->each(function ($node) use (&$response) {
            $response[] = $node->text();
        });

        return $response;
    }

    /**
     * @param  \Symfony\Component\DomCrawler\Crawler  $crawler
     * @param  array                                  $keys
     * @return array
     */
    protected function filterByKeys(Crawler $crawler, array $keys): array
    {
        $response = [];

        foreach ($keys as $key) {
            $response[$key] = $this->filterByKey($crawler, $key);
        }

        return $response;
    }

    /**
     * @param  string  $value
     * @return string
     */
    protected function removeSpace(string $value): string
    {
        return preg_replace('/[\x00\s]++/u', '', $value);
    }

    /**
     * @param  string  $value
     * @return string
     */
    protected function formatComment(string $value): string
    {
        return mb_convert_kana($this->removeSpace($value), 'KVa');
    }
}
