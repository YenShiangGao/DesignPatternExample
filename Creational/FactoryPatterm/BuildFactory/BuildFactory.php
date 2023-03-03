<?php
    require_once './BuildFactoryInterface.php';
    require_once '../Unit/Unit.php';

    class CommandCenter implements BuildFactoryInterface
    {
        public function outputUnit()
        {
            return new Worker();
        }
    }

    class Barrack implements BuildFactoryInterface
    {
        public function outputUnit()
        {
            return new Solider();
        }
    }

    class Airport implements BuildFactoryInterface
    {
        public function outputUnit()
        {
            $aircraft = new Aircraft();
            $aircraft->build();
            return $aircraft;
        }
    }