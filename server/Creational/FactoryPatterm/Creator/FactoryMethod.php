<?php

namespace FactoryPatterm\Creator;

require_once dirname(__DIR__).'/Product/Worker.php';
require_once dirname(__DIR__).'/Product/Solider.php';
require_once dirname(__DIR__).'/Product/Aircraft.php';

abstract class FactoryMethod
{
    abstract public function outputUnit();

    public function insertQueue()
    {
        $unit = $this->outputUnit();
        
        echo $unit::NAME."加入生產陣列<br/>";
        echo "等待一下，正在生產中...<br/>";
        echo "生產完成! <br/>";
        echo $unit->playSlogan() . "<br/>";
    }
}