<?php

use Ronaldmirabal\TipoCambioDominicana\TipoCambioDominicana;

test('converts usd to dop correctly', function () {
    $exchange = new TipoCambioDominicana();
    $result = $exchange->usdToDop(500); // 500 USD, por ejemplo

    expect($result)->toBeNumeric();
});

test('show usd', function () {
    $exchange = new TipoCambioDominicana();
    $result = $exchange->showUsdSell(); // 500 USD, por ejemplo

    expect($result)->toBeNumeric();
});
