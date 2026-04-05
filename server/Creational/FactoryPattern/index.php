<?php
require_once __DIR__.'/Creator/CommandCenter.php';
require_once __DIR__.'/Creator/Barrack.php';
require_once __DIR__.'/Creator/Airport.php';

use FactoryPattern\Creator\Airport;
use FactoryPattern\Creator\Barrack;
use FactoryPattern\Creator\CommandCenter;
use FactoryPattern\Creator\FactoryMethod;

function summon(FactoryMethod $creator)
{
    $creator->insertQueue();
}

$letter = ['Q', 'W', 'E'];

$key = $letter[array_rand($letter)];

switch($key) {
    case 'Q':
        summon(new CommandCenter());
        break;
    case 'W':
        summon(new Barrack());
        break;
    case 'E':
        summon(new Airport());
        break;
}