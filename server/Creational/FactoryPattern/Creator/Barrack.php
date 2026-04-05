<?php

namespace FactoryPattern\Creator;

use FactoryPattern\Product\Soldier;

class Barrack extends FactoryMethod
{
    public function outputUnit(): Soldier
    {
        return new Soldier();
    }
}