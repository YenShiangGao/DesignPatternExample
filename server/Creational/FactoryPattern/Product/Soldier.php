<?php

namespace FactoryPattern\Product;

require_once __DIR__.'/UnitInterface.php';

class Soldier implements UnitInterface
{
    const NAME = 'Soldier';

    public function playSlogan()
    {
        echo "想嘗嘗我的厲害嗎!小子。<br/><br/>";
    }
}