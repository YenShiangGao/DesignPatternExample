<?php

namespace Subsystems;

class Ghost
{
    public function aim($coordinates)
    {
        echo "[Ghost] Infiltrating area...\n";
        echo "[Ghost] Painting target at coordinates: {$coordinates}\n";
        echo "[Ghost] 'Never know what hit 'em.'\n";
    }
}
