<?php

namespace FactoryPatterm\BuildFactory;

use FactoryPatterm\Unit\Aircraft;

class AirportFactory extends FactoryMethod
{
    public function outputUnit()
    {
        $aircraft = new Aircraft();
        $aircraft->build();
        return $aircraft;
    }
}