<?php
    include_once './BuildFactory/BuildFactory.php';

    $commandCenter = new CommandCenter();
    $worker = $commandCenter->outputUnit();
    $worker->playSlogan();

    $barrack = new Barrack();
    $marine = $barrack->outputUnit();
    $marine->playSlogan();

    $airport = new Airport();
    $aircraft = $airport->outputUnit();
    $aircraft->playSlogan();