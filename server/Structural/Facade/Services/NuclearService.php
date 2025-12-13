<?php

namespace Services;

use Subsystems\NuclearSilo;
use Subsystems\Ghost;
use Subsystems\NotificationSystem;

class NuclearService
{
    protected $silo;
    protected $ghost;
    protected $notification;

    public function __construct(NuclearSilo $silo, Ghost $ghost, NotificationSystem $notification)
    {
        $this->silo = $silo;
        $this->ghost = $ghost;
        $this->notification = $notification;
    }

    public function launchNuke($coordinates)
    {
        echo "=== Commander initiated nuclear launch sequence ===\n";

        // 1. Prepare Silo
        $this->silo->prepare();

        // 2. Ghost aims
        $this->ghost->aim($coordinates);

        // 3. Notify everyone
        $this->notification->alert();

        // 4. Launch
        $this->silo->ignite();

        echo "=== Sequence completed ===\n";
    }
}
