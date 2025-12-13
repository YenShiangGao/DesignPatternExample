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

// --- Application Bootstrapping ---

// 1. Initialize Subsystems (Dependencies)
$silo = new NuclearSilo();
$ghost = new Ghost();
$notification = new NotificationSystem();

// 2. Create the Service Instance with dependencies injected
$serviceInstance = new NuclearService($silo, $ghost, $notification);

// 3. Bind the service instance to the Container with the specific key
//    The key 'nuclear.command' matches what NuclearCommand::getFacadeAccessor() returns.
Container::bind('nuclear.command', $serviceInstance);


// --- Client Code ---

echo "Commmander: I need a nuke at coordinates 100, 200.\n";
echo "System: Processing request via Facade...\n\n";

// The Magic happens here.
// We call a static method 'launchNuke' on NuclearCommand.
// It doesn't adhere to specific static method definitions but uses __callStatic
// to resolve the 'nuclear.command' service from container and call 'launchNuke' on it.
NuclearCommand::launchNuke("100, 200");

echo "\nSystem: Done.\n";
