<?php

namespace Strategy;

require_once __DIR__ . '/../unit/AttackStrategyInterface.php';
require_once __DIR__ . '/../unit/MeleeAttack.php';
require_once __DIR__ . '/../unit/RangedAttack.php';
require_once __DIR__ . '/../unit/SiegeAttack.php';
require_once __DIR__ . '/../unit/AirAttack.php';

/**
 * 用 Map 註冊策略,徹底消滅 if-else
 * 未來新增兵種只需要在 registry 加一行
 */
class UnitFactory
{
    private static array $registry = [
        'zealot'  => MeleeAttack::class,
        'marine'  => RangedAttack::class,
        'tank'    => SiegeAttack::class,
        'viking'  => AirAttack::class,
    ];

    public static function create(string $unitType): AttackStrategyInterface
    {
        if (!isset(self::$registry[$unitType])) {
            throw new \InvalidArgumentException("未知兵種: {$unitType}");
        }

        $strategyClass = self::$registry[$unitType];
        return new $strategyClass();
    }
}
