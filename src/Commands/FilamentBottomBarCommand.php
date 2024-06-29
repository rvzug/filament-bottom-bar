<?php

namespace Rvzug\FilamentBottomBar\Commands;

use Illuminate\Console\Command;

class FilamentBottomBarCommand extends Command
{
    public $signature = 'filament-bottom-bar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
