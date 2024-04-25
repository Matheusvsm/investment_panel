<?php

namespace App\Services;

use GuzzleHttp\Client;

class ApiVantageService
{
    protected $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getDividendData($fiiTicker)
    {
        $url = "https://finance.yahoo.com/quote/MXRF11.SA";

        $response = $this->httpClient->get($url, [
            'verify' => false,
        ]);

        return $response->getBody()->getContents();
    }
}
