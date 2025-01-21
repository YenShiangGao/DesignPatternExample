<?php

namespace FactoryPatterm\Creator;

use FactoryPatterm\Product\Solider;

class Barrack extends FactoryMethod
{
    public function outputUnit(): Solider
    {
        return new Solider();
    }
}