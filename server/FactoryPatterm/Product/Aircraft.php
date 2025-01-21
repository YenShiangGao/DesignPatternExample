<?php

namespace FactoryPatterm\Product;

require_once __DIR__.'/UnitInterface.php';

class Aircraft implements UnitInterface
{
    const NAME = 'Aircraft';

    public function playSlogan()
    {
        $this->build();
        echo "幽靈轟炸機，待命中!";
    }

    private function build()
    {
        echo "組裝飛機中...<br/>";
    }
}