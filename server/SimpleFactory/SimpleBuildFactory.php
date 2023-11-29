<?php

use SimpleFactory\Unit\Marauder;
use SimpleFactory\Unit\Marine;

include_once "./Unit/Marauder.php";
include_once "./Unit/Marine.php";

class SimpleBuildFactory
{
    public static function createUnit($type) {
        switch ($type) {
            case "marauder":
                return new Marauder();
            case "Marine":
                return new Marine();
        }
    }
}