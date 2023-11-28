<?php

namespace FactoryPatterm\Unit;

require_once __DIR__.'/UnitInterface.php';

class Worker implements UnitInterface
{

    public function playSlogan()
    {
        echo "SUV準備好了，長官你想蓋啥建築呢?<br/><br/>";
    }
}