<?php

namespace AbstractFactory\Unit\Protoss;
require_once 'ProtossUnit.php';
class ProtossWorker extends ProtossUnit
{

    public function shout()
    {
        echo "嘟嘟嘟!!<br/><br/>";
    }
}