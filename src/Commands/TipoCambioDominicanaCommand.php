<?php

namespace Ronaldmirabal\TipoCambioDominicana\Commands;

use Illuminate\Console\Command;

class TipoCambioDominicanaCommand extends Command
{
    public $signature = 'tipo-cambio-dominicana';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
