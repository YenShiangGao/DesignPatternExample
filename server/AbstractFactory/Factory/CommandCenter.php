<?php

namespace AbstractFactory\Factory;

require_once 'BuildFactory.php';
require_once dirname(__DIR__).'/Unit/Protoss/ProtossWorker.php';
require_once dirname(__DIR__).'/Unit/Terran/TerranWorker.php';

use AbstractFactory\Unit\Protoss\ProtossWorker;
use AbstractFactory\Unit\Terran\TerranWorker;

class CommandCenter extends BuildFactory
{

    public function outputTerranUnit(): TerranWorker
    {
        return new TerranWorker();
    }

    public function outputProtossUnit(): ProtossWorker
    {
        return new ProtossWorker();
    }
}