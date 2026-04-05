<?php

namespace AbstractFactory\Factory;

require_once 'BuildFactory.php';
require_once dirname(__DIR__).'/Unit/Protoss/ProtossZealot.php';
require_once dirname(__DIR__).'/Unit/Terran/TerranSoldier.php';

use AbstractFactory\Unit\Protoss\ProtossZealot;
use AbstractFactory\Unit\Terran\TerranSoldier;

class Barrack extends BuildFactory
{

    public function outputTerranUnit(): TerranSoldier
    {
        return new TerranSoldier();
    }

    public function outputProtossUnit(): ProtossZealot
    {
        return new ProtossZealot();
    }
}