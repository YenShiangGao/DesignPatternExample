<?php

use Framework\Facade;

/**
 * @method static void launchNuke(string $coordinates)
 * @see \Services\NuclearService
 */
class NuclearCommand extends Facade
{
    protected static function getFacadeAccessor()
    {
        // This string key must match the binding in the Container
        return 'nuclear.command';
    }
}
