<?php

namespace Ronaldmirabal\TipoCambioDominicana;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class TipoCambioDominicana
{

    protected string $baseUrl = 'https://www.banreservas.com';

    public function usdToDop(float $usdMount) : float
    {
        $client = new Client(['cookies' => true]);
        $response = $client->get($this->baseUrl);
        $html = (string) $response->getBody();
        $crawler = new Crawler($html);

        // USD
        $usdSell = $crawler->filter('td.tasacambio-ventaUS')->text();
        $clean = preg_replace('/[^0-9.,]/', '', $usdSell);
        $usdSellFloat = (float)$clean;
        $result = $usdSellFloat * $usdMount;
        return $result;
    }

     public function eurToDop(float $eurMount) : float
    {
        $client = new Client(['cookies' => true]);
        $response = $client->get($this->baseUrl);
        $html = (string) $response->getBody();
        $crawler = new Crawler($html);

        // USD
        $eurSell = $crawler->filter('td.tasacambio-ventaEU')->text();
        $clean = preg_replace('/[^0-9.,]/', '', $eurSell);
        $eurSellFloat = (float)$clean;
        $result = $eurSellFloat * $eurMount;
        return $result;
    }

}
