# Descripción del Paquete
TipoCambioDomincana es un paquete desarrollado para facilitar la consulta del tipo de cambio oficial del Dólar (USD) y del Euro (EUR) frente al Peso Dominicano (DOP).

Este paquete ofrece una interfaz simple, eficiente y totalmente integrada con Laravel para obtener tasas de cambio actualizadas utilizando fuentes confiables del mercado financiero dominicano.

# 🎯 Objetivo
Proveer una solución estandarizada y reutilizable para proyectos Laravel que requieran obtener el tipo de cambio en tiempo real con una sola línea de código.

# 📦 Instalación

Instala el paquete vía Composer:

```bash
composer require :vendor_slug/:package_slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag=":package_slug-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=":package_slug-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag=":package_slug-views"
```

## Usage

```php
$variable = new VendorName\Skeleton();
echo $variable->echoPhrase('Hello, VendorName!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
