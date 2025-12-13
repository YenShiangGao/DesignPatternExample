<?php

namespace Subsystems;

class NotificationSystem
{
    public function alert()
    {
        echo "[Notification] ATTENTION: Nuclear Launch Detected.\n";
        echo "[Notification] Broadcasting to all channels.\n";
    }
}
