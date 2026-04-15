<?php

namespace Strategy;

require_once __DIR__ . '/AttackStrategyInterface.php';

class RangedAttack implements AttackStrategyInterface
{
    public function attack(): string
    {
        return "🔫 陸戰隊員舉起 C-14 步槍射擊,造成 6 點遠程傷害!";
    }

    public function getRange(): int
    {
        return 5;
    }
}
