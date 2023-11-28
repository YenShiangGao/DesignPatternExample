<?php

namespace FactoryPatterm\Unit;

require_once __DIR__.'/UnitInterface.php';

class Aircraft implements UnitInterface
{
    public function playSlogan()
    {
        echo "幽靈轟炸機，待命中!";
    }

    public function build()
    {
        echo "組裝飛機中...<br/>";
    }
}