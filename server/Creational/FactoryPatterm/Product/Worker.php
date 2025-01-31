<?php

namespace FactoryPatterm\Product;

require_once __DIR__.'/UnitInterface.php';

class Worker implements UnitInterface
{
    const NAME = 'Worker';

    public function playSlogan()
    {
        echo "SUV準備好了，長官你想蓋啥建築呢?<br/><br/>";
    }
}