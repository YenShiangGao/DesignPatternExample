<?php

namespace FactoryPatterm\Creator;

use FactoryPatterm\Product\Aircraft;

class Airport extends FactoryMethod
{
    public function outputUnit(): Aircraft
    {
        return new Aircraft();
    }
}