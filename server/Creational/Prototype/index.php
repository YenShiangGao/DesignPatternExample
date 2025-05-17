<?php
require "./Unit.php";

use Prototype\Unit;


$wormPrototype = new Unit();
$wormPrototype->setName('Worm');
$wormPrototype->setAttack(0);
$wormPrototype->setHp(1);

$worm1 = clone $wormPrototype;
$worm1 = $worm1->build();

$worm2 = clone $wormPrototype;
$worm2 = $worm2->build();

echo "Worm1: {$worm1->getName()}, Attack: {$worm1->getAttack()}, HP:{$worm1->getHp()}, Now Position: X->{$worm1->getPosition()['x']}, y->{$worm1->getPosition()['y']} <br>";
echo "Worm2: {$worm2->getName()}, Attack: {$worm2->getAttack()}, HP:{$worm2->getHp()}, Now Position: X->{$worm2->getPosition()['x']}, y->{$worm2->getPosition()['y']} <br>";