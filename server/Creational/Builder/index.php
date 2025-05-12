<?php

use Builder\TerranUnitBuilder;
use Builder\UnitDirector;

require_once "./UnitBuilderInterface.php";
require_once "./TerranUnitBuilder.php";
require_once "./UnitDirector.php";
require_once "./Unit.php";

$builder = new TerranUnitBuilder();
$director = new UnitDirector();

$marine = $director->createMarine($builder);
echo $marine->describe() . "<br>";

$firebat = $director->createFirebat($builder);
echo $firebat->describe() . "<br>";