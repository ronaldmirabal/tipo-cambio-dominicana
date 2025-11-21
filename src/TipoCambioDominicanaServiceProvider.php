<?php

namespace Ronaldmirabal\TipoCambioDominicana;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ronaldmirabal\TipoCambioDominicana\Commands\TipoCambioDominicanaCommand;

class TipoCambioDominicanaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tipo-cambio-dominicana')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tipo_cambio_dominicana_table')
            ->hasCommand(TipoCambioDominicanaCommand::class);
    }
}
