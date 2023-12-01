<?php
require_once __DIR__.'/Factory/CommandCenter.php';
require_once __DIR__.'/Factory/Barrack.php';
require_once __DIR__.'/Factory/Airport.php';

# 兵營
$barrack = new \AbstractFactory\Factory\Barrack();
$terranUnit = $barrack->outputTerranUnit();
$protossUnit = $barrack->outputProtossUnit();

$terranUnit->playSlogan();
$protossUnit->shout();

# 指揮中心
$commandCenter = new \AbstractFactory\Factory\CommandCenter();
$terranUnit = $commandCenter->outputTerranUnit();
$protossUnit = $commandCenter->outputProtossUnit();

$terranUnit->playSlogan();
$protossUnit->shout();

# 衛星港
$airport = new \AbstractFactory\Factory\Airport();
$terranUnit = $airport->outputTerranUnit();
$protossUnit = $airport->outputProtossUnit();

$terranUnit->playSlogan();
$protossUnit->shout();