<?php

namespace FactoryPatterm\BuildFactory;

use FactoryPatterm\Unit\Solider;

class BarrackFactory extends FactoryMethod
{
    public function outputUnit(): Solider
    {
        return new Solider();
    }
}