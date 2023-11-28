<?php
include_once "Marauder.php";
include_once "Marine.php";

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