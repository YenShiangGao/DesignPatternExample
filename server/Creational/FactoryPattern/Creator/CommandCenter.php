<?php
namespace FactoryPattern\Creator;

use FactoryPattern\Product\Worker;

require_once __DIR__.'/FactoryMethod.php';

class CommandCenter extends FactoryMethod
{
    public function outputUnit(): Worker
    {
        return new Worker();
    }
}