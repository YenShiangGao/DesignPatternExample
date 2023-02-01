<?php
include_once "SimpleBuildFactory.php";

class BuildCenter
{
    public function outputUnit($type) {
        $unit = SimpleBuildFactory::createUnit($type);

        $unit->getMaterial();
        $unit->train();
        $unit->create();
    }
}