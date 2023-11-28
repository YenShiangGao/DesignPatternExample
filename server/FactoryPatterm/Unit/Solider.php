<?php

namespace FactoryPatterm\Unit;

require_once __DIR__.'/UnitInterface.php';

class Solider implements UnitInterface
{

    public function playSlogan()
    {
        echo "想嘗嘗我的厲害嗎!小子。<br/><br/>";
    }
}