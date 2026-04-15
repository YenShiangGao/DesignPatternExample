<?php

namespace Strategy;

require_once __DIR__ . '/AttackStrategyInterface.php';

class SiegeAttack implements AttackStrategyInterface
{
    public function attack(): string
    {
        return "💥 攻城坦克進入架設模式,發射砲彈造成 40 點範圍傷害!";
    }

    public function getRange(): int
    {
        return 13;
    }
}
