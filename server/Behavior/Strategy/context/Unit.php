<?php

namespace Strategy;

require_once __DIR__ . '/../unit/AttackStrategyInterface.php';

class Unit
{
    private string $name;
    private AttackStrategyInterface $strategy;

    public function __construct(string $name, AttackStrategyInterface $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    // 玩家升級/切換形態時,可以動態替換策略
    public function setStrategy(AttackStrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    // Context 只負責呼叫,不負責選擇
    public function performAttack(): string
    {
        return "[{$this->name}] " . $this->strategy->attack()
            . " (射程: {$this->strategy->getRange()})";
    }
}
