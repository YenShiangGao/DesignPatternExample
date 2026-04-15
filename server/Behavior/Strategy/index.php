<?php
require_once './context/Unit.php';
require_once './context/UnitFactory.php';
require_once './unit/SiegeAttack.php';

use Strategy\Unit;
use Strategy\UnitFactory;
use Strategy\SiegeAttack;

// === 星海爭霸:建立你的部隊 ===
// 每個兵種注入對應的「攻擊策略」
$zealot = new Unit('狂戰士', UnitFactory::create('zealot'));
$marine = new Unit('陸戰隊員', UnitFactory::create('marine'));
$tank   = new Unit('攻城坦克', UnitFactory::create('tank'));
$viking = new Unit('維京戰機', UnitFactory::create('viking'));

echo $zealot->performAttack() . "<br/>";
echo $marine->performAttack() . "<br/>";
echo $tank->performAttack()   . "<br/>";
echo $viking->performAttack() . "<br/>";

echo "<hr/>";

// === 動態切換策略 ===
// 陸戰隊員升級裝備後,換成攻城模式(策略在執行時替換)
echo "🔧 陸戰隊員升級,切換為攻城砲擊模式...<br/>";
$marine->setStrategy(new SiegeAttack());
echo $marine->performAttack() . "<br/>";
