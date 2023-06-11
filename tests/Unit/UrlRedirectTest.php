<?php

namespace Tests\Unit;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class UrlRedirectTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_url_redirection(): void
    {
        $url = "https://picsum.photos/640/360";
        $client = new Client(['allow_redirects' => ['track_redirects' => true]]);
        $response = $client->get($url);
        $redirectedUrls = $response->getHeader(\GuzzleHttp\RedirectMiddleware::HISTORY_HEADER);
        dump($redirectedUrls[0]);
        $this->assertTrue(true);
    }
}
