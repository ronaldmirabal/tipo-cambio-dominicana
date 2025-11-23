# Descripción del Paquete
TipoCambioDomincana es un paquete desarrollado para facilitar la consulta del tipo de cambio oficial del Dólar (USD) y del Euro (EUR) frente al Peso Dominicano (DOP).

Este paquete ofrece una interfaz simple, eficiente y totalmente integrada con Laravel para obtener tasas de cambio actualizadas utilizando fuentes confiables del mercado financiero dominicano como Banreservas del cual se obtiene el tipo de cambio.

# 🎯 Objetivo
Proveer una solución estandarizada y reutilizable para proyectos Laravel que requieran obtener el tipo de cambio en tiempo real con una sola línea de código.

# 📦 Instalación

Instala el paquete vía Composer:

```bash
composer require ronaldmirabal/tipo-cambio-dominicana
```

## :clipboard: Requisitos
- PHP ^8.1
- Laravel ^10.0


You can publish the config file with:

```bash
php artisan vendor:publish --tag="tipo-cambio-dominicana-config"
```


## Como Usar

```php
use Ronaldmirabal\TipoCambioDominicana\TipoCambioDominicana;

$exchange = new TipoCambioDominicana();
$result = $exchange->usdToDop(500); // 500 USD, por ejemplo
```

## :rotating_light: Funciones Accesibles
```php
$result = $exchange->usdToDop(500); //Convierte de dolares a peso dominicano
$result = $exchange->showUsdSell(); //Muestra el tipo de cambio del dolar para la venta
$result = $exchange->euToDop(500); //Convierte de euros a peso dominicano
$result = $exchange->showEuSell(); //Muestra el tipo de cambio del euro para la venta
```
## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ronald Mirabal](https://github.com/ronaldmirabal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
