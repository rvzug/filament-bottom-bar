<?php

namespace Rvzug\FilamentBottomBar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rvzug\FilamentBottomBar\FilamentBottomBar
 */
class FilamentBottomBar extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Rvzug\FilamentBottomBar\FilamentBottomBar::class;
    }
}
