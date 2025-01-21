<?php
namespace FactoryPatterm\Creator;

use FactoryPatterm\Product\Worker;

require_once __DIR__.'/FactoryMethod.php';

class CommandCenter extends FactoryMethod
{
    public function outputUnit(): Worker
    {
        return new Worker();
    }
}