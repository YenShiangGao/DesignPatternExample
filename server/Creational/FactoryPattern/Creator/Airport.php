<?php

namespace FactoryPattern\Creator;

use FactoryPattern\Product\Aircraft;

class Airport extends FactoryMethod
{
    public function outputUnit(): Aircraft
    {
        return new Aircraft();
    }
}