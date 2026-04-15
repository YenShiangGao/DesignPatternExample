<?php

namespace Strategy;

require_once __DIR__ . '/AttackStrategyInterface.php';

class AirAttack implements AttackStrategyInterface
{
    public function attack(): string
    {
        return "✈️ 維京戰機切換至戰機模式,發射飛彈造成 14 點對空傷害!";
    }

    public function getRange(): int
    {
        return 9;
    }
}
