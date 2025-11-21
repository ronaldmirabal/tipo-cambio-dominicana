<?php

use Ronaldmirabal\TipoCambioDominicana\TipoCambioDominicana;

test('converts eur to dop correctly', function () {
    $exchange = new TipoCambioDominicana();
    $result = $exchange->euToDop(500); // 500 USD, por ejemplo

    expect($result)->toBeNumeric();
});
