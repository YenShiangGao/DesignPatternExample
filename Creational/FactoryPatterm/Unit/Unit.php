<?php
    require_once './UnitInterface.php';

    class Worker implements UnitInterface
    {
        public function playSlogan() {
            echo "SUV準備好了，長官你想蓋啥建築呢?<br/><br/>";
        }
    }

    class Solider implements UnitInterface
    {
        public function playSlogan() {
            echo "想嘗嘗我的厲害嗎!小子。<br/><br/>";
        }
    }

    class Aircraft implements UnitInterface
    {
        public function playSlogan() {
            echo "幽靈轟炸機，待命中!";
        }

        public function build() {
            echo "組裝飛機中...<br/>";
        }
    }
    