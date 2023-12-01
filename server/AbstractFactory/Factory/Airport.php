<?php

namespace AbstractFactory\Factory;

require_once 'Airport.php';
require_once dirname(__DIR__).'/Unit/Protoss/ProtossPhoenix.php';
require_once dirname(__DIR__).'/Unit/Terran/TerranAircraft.php';

use AbstractFactory\Unit\Protoss\ProtossPhoenix;
use AbstractFactory\Unit\Terran\TerranAircraft;

class Airport extends BuildFactory
{

    public function outputTerranUnit(): TerranAircraft
    {
        return new TerranAircraft();
    }

    public function outputProtossUnit(): ProtossPhoenix
    {
        return new ProtossPhoenix();
    }
}