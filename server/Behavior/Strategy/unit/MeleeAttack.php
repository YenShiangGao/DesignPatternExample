<?php

namespace Strategy;

require_once __DIR__ . '/AttackStrategyInterface.php';

class MeleeAttack implements AttackStrategyInterface
{
    public function attack(): string
    {
        return "⚔️ 狂戰士揮動雙刃,對敵人造成 16 點近戰傷害!";
    }

    public function getRange(): int
    {
        return 1;
    }
}
