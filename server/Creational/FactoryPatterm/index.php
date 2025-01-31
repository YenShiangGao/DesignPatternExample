<?php
require_once __DIR__.'/Creator/CommandCenter.php';
require_once __DIR__.'/Creator/Barrack.php';
require_once __DIR__.'/Creator/Airport.php';

use FactoryPatterm\Creator\Airport;
use FactoryPatterm\Creator\Barrack;
use FactoryPatterm\Creator\CommandCenter;
use FactoryPatterm\Creator\FactoryMethod;

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