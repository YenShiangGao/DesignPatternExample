<?php
namespace FactoryPatterm\BuildFactory;

use FactoryPatterm\Unit\Worker;

require_once __DIR__.'/FactoryMethod.php';

class CommandCenterFactory extends FactoryMethod
{
    public function outputUnit()
    {
        return new Worker();
    }
}