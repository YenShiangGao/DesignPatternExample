<?php

// Manual Autoloading for this example
require_once __DIR__ . '/Framework/Container.php';
require_once __DIR__ . '/Framework/Facade.php';
require_once __DIR__ . '/Subsystems/NuclearSilo.php';
require_once __DIR__ . '/Subsystems/Ghost.php';
require_once __DIR__ . '/Subsystems/NotificationSystem.php';
require_once __DIR__ . '/Services/NuclearService.php';
require_once __DIR__ . '/NuclearCommand.php';

use Framework\Container;
use Services\NuclearService;
use Subsystems\NuclearSilo;
use Subsystems\Ghost;
use Subsystems\NotificationSystem;

// --- 應用初始化 ---

// 1. 初始化
$silo = new NuclearSilo();
$ghost = new Ghost();
$notification = new NotificationSystem();

// 2. 建立核彈服務實例
$serviceInstance = new NuclearService($silo, $ghost, $notification);

// 3. 將核彈服務實例到容器中
//    這裡的 key 'nuclear.command' 會和 NuclearCommand::getFacadeAccessor() 返回的值一致
Container::bind('nuclear.command', $serviceInstance);


// --- Client Code ---

echo "Commmander: I need a nuke at coordinates 100, 200.\n";
echo "System: Processing request via Facade...\n\n";

// 魔法從這裡展開
// 我們在這裡使用 NuclearCommand這個 Facade，並且呼叫 launchNuke 靜態方法
// 在我們步驟三時，已經將NuclearCommand與NuclearService綁定在一起
// 所以在我們使用NuclearCommand類時，會看到`nuclear.command`被傳入到Container::make()
// 並回傳NuclearService實例，接者在這個NuclearService實例上呼叫launchNuke方法
NuclearCommand::launchNuke("100, 200");

echo "\nSystem: Done.\n";
