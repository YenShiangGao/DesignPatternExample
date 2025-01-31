<?php

namespace AbstractFactory\Factory;

require_once 'BuildFactory.php';
require_once dirname(__DIR__).'/Unit/Protoss/ProtossZealot.php';
require_once dirname(__DIR__).'/Unit/Terran/TerranSolider.php';

use AbstractFactory\Unit\Protoss\ProtossZealot;
use AbstractFactory\Unit\Terran\TerranSolider;

class Barrack extends BuildFactory
{

    public function outputTerranUnit(): TerranSolider
    {
        return new TerranSolider();
    }

    public function outputProtossUnit(): ProtossZealot
    {
        return new ProtossZealot();
    }
}