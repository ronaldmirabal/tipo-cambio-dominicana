<?php

namespace Ronaldmirabal\TipoCambioDominicana;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class TipoCambioDominicana
{

    protected string $baseUrl = 'https://www.banreservas.com';
    protected Client $client;
    public function __construct()
    {
        $this->client = new Client([
            'cookies' => true,
            'timeout' => 10,
            'connect_timeout' => 5,
            'verify' => false
        ]);
    }

    /**
     * Obtiene la tasa de venta de una moneda desde Banreservas
     */
    protected function getSellRate(string $selector): float
    {
        try {
            $response = $this->client->get($this->baseUrl);
            $html = (string) $response->getBody();
            $crawler = new Crawler($html);

            $rateText = $crawler->filter($selector)->text();

            // Limpiar string y convertir a float
            $clean = preg_replace('/[^0-9.,]/', '', $rateText);
            $normalized = str_replace(',', '.', $clean);
            $value = (float)$normalized;

            return round($value, 2); // asegurar 2 decimales
        } catch (\Exception $e) {
            throw new \RuntimeException("Error obteniendo tasa de cambio: " . $e->getMessage());
        }
    }

    public function usdToDop(float $usdAmount): float
    {
        $rate = $this->getSellRate('td.tasacambio-ventaUS');
        return round($rate * $usdAmount, 2);
    }

    public function showUsdSell(): float
    {
        return $this->getSellRate('td.tasacambio-ventaUS');
    }

    public function euToDop(float $eurAmount): float
    {
        $rate = $this->getSellRate('td.tasacambio-ventaEU');
        return round($rate * $eurAmount, 2);
    }

    public function showEuSell(): float
    {
        return $this->getSellRate('td.tasacambio-ventaEU');
    }
}
