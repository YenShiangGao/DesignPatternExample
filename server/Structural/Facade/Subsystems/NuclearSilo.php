<?php

namespace Subsystems;

class NuclearSilo
{
    public function prepare()
    {
        echo "[NuclearSilo] Checking inventory... Ready.\n";
        echo "[NuclearSilo] Opening silo doors...\n";
    }

    public function ignite()
    {
        echo "[NuclearSilo] Ignition sequence start... 3... 2... 1...\n";
        echo "[NuclearSilo] BOOM! Missile launched!\n";
    }
}
