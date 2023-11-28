<?php
require_once __DIR__.'/BuildFactory/CommandCenterFactory.php';
require_once __DIR__.'/BuildFactory/BarrackFactory.php';
require_once __DIR__.'/BuildFactory/AirportFactory.php';

use FactoryPatterm\BuildFactory\AirportFactory;
use FactoryPatterm\BuildFactory\BarrackFactory;
use FactoryPatterm\BuildFactory\CommandCenterFactory;

    $commandCenter = new CommandCenterFactory();
    $worker = $commandCenter->outputUnit();
    $worker->playSlogan();

    $barrack = new BarrackFactory();
    $marine = $barrack->outputUnit();
    $marine->playSlogan();

    $airport = new AirportFactory();
    $aircraft = $airport->outputUnit();
    $aircraft->playSlogan();