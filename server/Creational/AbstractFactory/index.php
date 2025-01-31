<?php

use AbstractFactory\Factory\BuildFactory;

require_once __DIR__.'/Factory/CommandCenter.php';
require_once __DIR__.'/Factory/Barrack.php';
require_once __DIR__.'/Factory/Airport.php';


function switchCamp(BuildFactory $factory)
{
    $terranUnit = $factory->outputTerranUnit();
    $protossUnit = $factory->outputProtossUnit();

    $terranUnit->playSlogan();
    $protossUnit->shout();

}

$input = ['CommandCenter', 'Barrack', 'Airport'];

$input = $input[array_rand($input)];

switch ($input) {
    case 'CommandCenter':
        switchCamp(new \AbstractFactory\Factory\CommandCenter());
        break;
    case 'Barrack':
        switchCamp(new \AbstractFactory\Factory\Barrack());
        break;
    case 'Airport':
        switchCamp(new \AbstractFactory\Factory\Airport());
        break;
}